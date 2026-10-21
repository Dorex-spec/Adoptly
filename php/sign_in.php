<?php
session_start();

$popupType = '';
$popupTitle = '';
$popupMessage = '';

if (!empty($_SESSION['loggedInUser'])) {
    $popupType = 'error';
    $popupTitle = 'Already Signed In';
    $popupMessage = 'The user has already been signed in.';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $fullName = isset($_POST['full_name']) ? trim($_POST['full_name']) : '';

    if (empty($email) || !str_ends_with(strtolower($email), '@gmail.com')) {
        $popupType = 'error';
        $popupTitle = 'Sign In Error';
        $popupMessage = 'Invalid account. You must use an @gmail.com address.';
    } elseif (isset($_POST['full_name']) && $fullName === '') {
        $popupType = 'error';
        $popupTitle = 'Sign In Error';
        $popupMessage = 'Please enter your full name.';
    } else {
        $_SESSION['loggedInUser'] = strtolower($email);
        if (isset($_POST['full_name'])) {
            $_SESSION['full_name'] = $fullName;
            header('Location: ../Welcome_page.php');
            exit;
        }
        $popupType = 'success';
        $popupTitle = 'Login Successful';
        $popupMessage = '✔️ Your account is now logged in for this session.';
    }
}

// Load View
include __DIR__ . '/../Html/sign_in.html';
?>

<?php if (!empty($popupType)): ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showPopup(
                <?= json_encode($popupType) ?>,
                <?= json_encode($popupTitle) ?>,
                <?= json_encode($popupMessage) ?>
            );
        });
    </script>
<?php endif; ?>