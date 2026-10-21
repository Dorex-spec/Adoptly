<?php
declare(strict_types=1);

if (!function_exists('e')) {
    function e(string $v): string { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
}

$navLinks = [
    ['label' => 'Browse Pets',      'href' => 'Html/Browse_page.html', 'active' => false],
    ['label' => 'Adoption Process', 'href' => 'Html/Adoption_process.html', 'active' => false],
    ['label' => 'Donate',           'href' => 'Donation.php', 'active' => false],
    ['label' => 'About',            'href' => 'About_us.php', 'active' => false],
];

// No dummy applicant data: every field starts empty.
$user = [
    'first' => '', 'last' => '', 'initials' => '',
    'role' => 'Applicant',
    'email' => '', 'phone' => '', 'address' => '',
    'city' => '', 'state' => '', 'zip' => '',
    'coName' => '', 'coPhone' => '',
];
if (session_status() === PHP_SESSION_NONE) { session_start(); }
$savedProfile = isset($_SESSION['adopter_profile']) && is_array($_SESSION['adopter_profile'])
    ? $_SESSION['adopter_profile']
    : [];
$profileDraft = isset($_SESSION['adopter_profile_draft']) && is_array($_SESSION['adopter_profile_draft'])
    ? $_SESSION['adopter_profile_draft']
    : [];
$savedProfile = array_merge($savedProfile, $profileDraft);
$fullName = trim((string)($_SESSION['full_name'] ?? ''));
if ($fullName !== '') {
    $nameParts = preg_split('/\s+/', $fullName, -1, PREG_SPLIT_NO_EMPTY) ?: [];
    $user['first'] = array_shift($nameParts) ?? '';
    $user['last'] = implode(' ', $nameParts);
    $user['initials'] = strtoupper(substr($user['first'], 0, 1) . substr($user['last'], 0, 1));
}
$user['email'] = (string)($_SESSION['loggedInUser'] ?? '');
$profileMap = [
    'first' => 'first_name', 'last' => 'last_name', 'email' => 'email', 'phone' => 'phone',
    'address' => 'address', 'city' => 'city', 'state' => 'state', 'zip' => 'zip',
    'coName' => 'co_name', 'coPhone' => 'co_phone',
];
foreach ($profileMap as $userKey => $profileKey) {
    if (isset($savedProfile[$profileKey])) {
        $user[$userKey] = trim((string)$savedProfile[$profileKey]);
    }
}
$user['preferences'] = array_values(array_filter(
    array_map('intval', (array)($savedProfile['preferences'] ?? [])),
    static fn (int $preference): bool => in_array($preference, [0, 1], true)
));
$user['photo'] = (string)($_SESSION['profile_photo'] ?? ''); // saved photo path, '' if none
$verified = false; // set true only after real identity verification

// Optional: account.php can set $profileOld (the POST data) and $profileErrors
// before including this file, so the page re-renders with values + red fields.
if (!empty($profileOld) && is_array($profileOld)) {
    $map = ['first' => 'first_name', 'last' => 'last_name', 'email' => 'email', 'phone' => 'phone',
            'address' => 'address', 'city' => 'city', 'state' => 'state', 'zip' => 'zip',
            'coName' => 'co_name', 'coPhone' => 'co_phone'];
    foreach ($map as $uk => $fk) { $user[$uk] = trim((string)($profileOld[$fk] ?? '')); }
    $user['preferences'] = array_values(array_filter(
        array_map('intval', (array)($profileOld['pref'] ?? [])),
        static fn (int $preference): bool => in_array($preference, [0, 1], true)
    ));
}
$errors = (isset($profileErrors) && is_array($profileErrors)) ? $profileErrors : [];

$states = [
    '' => 'Select state / region',
    'NCR' => 'National Capital Region (NCR)',
    'CAR' => 'Cordillera Administrative Region (CAR)',
    'R1' => 'Ilocos Region (Region I)',
    'R2' => 'Cagayan Valley (Region II)',
    'R3' => 'Central Luzon (Region III)',
    'R4A' => 'CALABARZON (Region IV-A)',
    'R4B' => 'MIMAROPA (Region IV-B)',
    'R5' => 'Bicol Region (Region V)',
    'R6' => 'Western Visayas (Region VI)',
    'R7' => 'Central Visayas (Region VII)',
    'R8' => 'Eastern Visayas (Region VIII)',
    'R9' => 'Zamboanga Peninsula (Region IX)',
    'R10' => 'Northern Mindanao (Region X)',
    'R11' => 'Davao Region (Region XI)',
    'R12' => 'SOCCSKSARGEN (Region XII)',
    'R13' => 'Caraga (Region XIII)',
    'BARMM' => 'Bangsamoro (BARMM)',
];

// Required form fields (name => label). Co-applicant fields are optional.
$required = [
    'first_name' => 'First name', 'last_name' => 'Last name', 'email' => 'Email address',
    'phone' => 'Phone number', 'address' => 'Street address', 'city' => 'City',
    'state' => 'State / region', 'zip' => 'ZIP / postal code',
];

/** Server-side validation. Call this before saving. Returns [field => message]. */
function profile_validate(array $in, array $required, array $states): array
{
    $errors = [];
    foreach ($required as $k => $_) {
        if (trim((string)($in[$k] ?? '')) === '') { $errors[$k] = 'This field is required.'; }
    }
    if (!isset($errors['email']) && !filter_var(trim((string)$in['email']), FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid email address.';
    }
    if (!isset($errors['phone']) && preg_match_all('/\d/', (string)$in['phone']) < 7) {
        $errors['phone'] = 'Enter a valid phone number.';
    }
    if (!isset($errors['state']) && !isset($states[(string)$in['state']])) {
        $errors['state'] = 'Select a valid state / region.';
    }
    return $errors;
}

/** Saves the uploaded profile photo after validation passes.
 *  Returns [relativePath|null, errorMessage|null]; [null, null] means no photo was sent. */
function profile_save_photo(array $f, string $dir = __DIR__ . '/uploads/profile'): array
{
    $err = $f['error'] ?? UPLOAD_ERR_NO_FILE;
    if ($err === UPLOAD_ERR_NO_FILE) { return [null, null]; }
    if ($err !== UPLOAD_ERR_OK) { return [null, 'Photo upload failed. Try again.']; }
    if ($f['size'] > 5 * 1024 * 1024) { return [null, 'Photo must be 5 MB or smaller.']; }
    $ext = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp', 'image/gif' => 'gif']
        [(new finfo(FILEINFO_MIME_TYPE))->file($f['tmp_name'])] ?? null;
    if (!$ext) { return [null, 'Photo must be a JPG, PNG, WEBP or GIF image.']; }
    if (!is_dir($dir) && !mkdir($dir, 0755, true)) { return [null, 'Could not save the photo.']; }
    $name = bin2hex(random_bytes(8)) . '.' . $ext;
    if (!move_uploaded_file($f['tmp_name'], $dir . '/' . $name)) { return [null, 'Could not save the photo.']; }
    return ['uploads/profile/' . $name, null];
}

function field_class(array $errors, string $k): string { return isset($errors[$k]) ? ' has-error' : ''; }
function field_error(array $errors, string $k): string
{
    $m = $errors[$k] ?? '';
    return '<p class="field__error" id="err-' . e($k) . '"' . ($m === '' ? ' hidden' : '') . '>' . e($m) . '</p>';
}

$sidebar = [
    ['label' => "Applicant's Personal Information", 'href' => 'Resume_profile.php', 'active' => true],
    ['label' => 'Adoption Information',   'href' => 'php/Adoption_information.php', 'active' => false],
    ['label' => 'Household Information',  'href' => 'Household.php', 'active' => false],
    ['label' => 'Security',               'href' => 'Security.php', 'active' => false],
    ['label' => 'Other Document Requirements', 'href' => 'php/requirements.php', 'active' => false],
];

$notifPrefs = [
    'Instant SMS for shelter interview requests',
    'Email digest of new matching rescue companions',
];

$footerCols = [
    'Quick Links' => [
        ['Browse Pets', 'Html/Browse_page.html'],
        ['Adoption Process', 'Html/Adoption_process.html'],
        ['Success Stories', 'Donation.php'],
        ['About Us', 'About_us.php'],
    ],
    'Resources'   => [
        ['FAQ', 'Html/Adoption_process.html#faq'],
        ['Pet Care Tips', 'Html/Adoption_process.html#faq'],
        ['Volunteer', 'About_us.php'],
        ['Support Center', 'mailto:support@adoptly.org'],
    ],
];
