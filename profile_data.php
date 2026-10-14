<?php
declare(strict_types=1);

if (!function_exists('e')) {
    function e(string $v): string { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
}

$navLinks = [
    ['label' => 'Browse Pets',      'href' => '#', 'active' => false],
    ['label' => 'Adoption Process', 'href' => '#', 'active' => false],
    ['label' => 'Donate',           'href' => 'donate_page.php', 'active' => false],
    ['label' => 'About',            'href' => '#', 'active' => false],
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
$user['photo'] = (string)($_SESSION['profile_photo'] ?? ''); // saved photo path, '' if none
$verified = false; // set true only after real identity verification

// Optional: account.php can set $profileOld (the POST data) and $profileErrors
// before including this file, so the page re-renders with values + red fields.
if (!empty($profileOld) && is_array($profileOld)) {
    $map = ['first' => 'first_name', 'last' => 'last_name', 'email' => 'email', 'phone' => 'phone',
            'address' => 'address', 'city' => 'city', 'state' => 'state', 'zip' => 'zip',
            'coName' => 'co_name', 'coPhone' => 'co_phone'];
    foreach ($map as $uk => $fk) { $user[$uk] = trim((string)($profileOld[$fk] ?? '')); }
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

/** Server-side validation. Call this in account.php BEFORE saving. Returns [field => message]. */
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

/** Saves the uploaded profile photo. Call in account.php after validation passes.
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
    ['label' => "Applicant's Personal Information", 'active' => true],
    ['label' => 'Adoption Information',   'active' => false],
    ['label' => 'Household Information',  'active' => false],
    ['label' => 'Security',               'active' => false],
    ['label' => 'Other Document Requirements', 'active' => false],
];

$notifPrefs = [
    'Instant SMS for shelter interview requests',
    'Email digest of new matching rescue companions',
];

$footerCols = [
    'Quick Links' => [['Browse Pets', '#'], ['Adoption Process', '#'], ['Success Stories', '#'], ['About Us', '#']],
    'Resources'   => [['FAQ', '#'], ['Pet Care Tips', '#'], ['Volunteer', '#'], ['Support Center', '#']],
];

