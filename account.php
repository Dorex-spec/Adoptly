<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$profileOld = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : [];
$profileErrors = [];
require_once __DIR__ . '/profile_data.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: Resume_profile.php');
    exit;
}

$profileErrors = profile_validate($_POST, $required, $states);
$profileFields = [
    'first_name', 'last_name', 'email', 'phone', 'address', 'city', 'state', 'zip',
    'co_name', 'co_phone',
];
$profileDraft = [];
foreach ($profileFields as $field) {
    $profileDraft[$field] = trim((string)($_POST[$field] ?? ''));
}
$profileDraft['preferences'] = array_values(array_intersect(
    ['0', '1'],
    array_map('strval', (array)($_POST['pref'] ?? []))
));
$photoPath = null;

if ($profileErrors === []) {
    [$photoPath, $photoError] = profile_save_photo(
        $_FILES['photo'] ?? [],
        __DIR__ . '/uploads/profile'
    );
    if ($photoError !== null) {
        $profileErrors['photo'] = $photoError;
    }
}

if ($profileErrors !== []) {
    $_SESSION['adopter_profile_draft'] = $profileDraft;
    $errors = $profileErrors;
    require __DIR__ . '/Resume_profile.php';
    exit;
}

$profile = $profileDraft;

$_SESSION['adopter_profile'] = $profile;
unset($_SESSION['adopter_profile_draft']);
$_SESSION['profile_complete'] = true;
$_SESSION['full_name'] = trim($profile['first_name'] . ' ' . $profile['last_name']);
$_SESSION['loggedInUser'] = strtolower($profile['email']);

if ($photoPath !== null) {
    $_SESSION['profile_photo'] = $photoPath;
}

$_SESSION['profile_saved'] = true;
$destination = isset($_POST['continue']) ? 'php/Adoption_information.php' : 'Resume_profile.php';
header('Location: ' . $destination);
exit;
