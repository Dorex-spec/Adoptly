<?php
session_start();

$popupType = '';
$popupTitle = '';
$popupMessage = '';

// 1. GET Request: Check if an account is already signed in for this session
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SESSION['loggedInUser'])) {
  $popupType = 'error';
  $popupTitle = 'Already Signed In';
  $popupMessage = 'Account has already signed in.';
}

// 2. POST Request: Process login form or social prompt submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = isset($_POST['email']) ? trim($_POST['email']) : '';

  if (isset($_SESSION['loggedInUser'])) {
    $popupType = 'error';
    $popupTitle = 'Log In Error';
    $popupMessage = 'Account has already signed in.';
  } elseif (empty($email) || !str_ends_with(strtolower($email), '@gmail.com')) {
    $popupType = 'error';
    $popupTitle = 'Log In Error';
    $popupMessage = 'Invalid account. You must use an @gmail.com address.';
  } else {
    $_SESSION['loggedInUser'] = strtolower($email);
    $popupType = 'success';
    $popupTitle = 'Login Successful';
    $popupMessage = '✔️ Your account is now logged in for this session.';
  }
}

// Load View
include 'Log_in.html';
?>

<?php if (!empty($popupType)): ?>
  document.addEventListener('DOMContentLoaded', function() {
  showPopup('<?php echo $popupType; ?>', '<?php echo addslashes($popupTitle); ?>',
  '<?php echo addslashes($popupMessage); ?>');
  });
<?php endif; ?>