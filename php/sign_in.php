<?php
session_start();

$popupType = '';
$popupTitle = '';
$popupMessage = '';

// Handle Form Submission (Both Email form and Social popup form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    // Check if session user already exists AND matches the exact email entered
    if (isset($_SESSION['loggedInUser']) && strtolower($_SESSION['loggedInUser']) === strtolower($email)) {
        $popupType = 'error';
        $popupTitle = 'Sign In Error';
        $popupMessage = 'This account has already been Signed in.';
    } elseif (empty($email) || !str_ends_with(strtolower($email), '@gmail.com')) {
        $popupType = 'error';
        $popupTitle = 'Sign In Error';
        $popupMessage = 'Invalid account. You must use an @gmail.com address.';
    } else {
        $_SESSION['loggedInUser'] = strtolower($email);
        $popupType = 'success';
        $popupTitle = 'Login Successful';
        $popupMessage = '✔️ Your account is now logged in for this session.';
    }
}

// Load View
include 'Sign_in.html';
?>

<?php if (!empty($popupType)): ?>
    document.addEventListener('DOMContentLoaded', function() {
    showPopup('<?php echo $popupType; ?>', '<?php echo addslashes($popupTitle); ?>',
    '<?php echo addslashes($popupMessage); ?>');
    });
<?php endif; ?>