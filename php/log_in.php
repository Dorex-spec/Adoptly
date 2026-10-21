<?php
session_start();

$popupType = '';
$popupTitle = '';
$popupMessage = '';

if (!empty($_SESSION['loggedInUser'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: ../Resume_profile.php');
    exit;
  }

  $email = strtolower(trim((string)($_POST['email'] ?? '')));
  if ($email !== '' && hash_equals(strtolower((string)$_SESSION['loggedInUser']), $email)) {
    header('Location: ../Resume_profile.php');
    exit;
  }

  $popupType = 'error';
  $popupTitle = 'Account Mismatch';
  $popupMessage = 'This email does not match the account that signed in. Please use your signed-in account.';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $popupType = 'error';
  $popupTitle = 'Account Not Found';
  $popupMessage = 'Please sign in to Adoptly first, then log in with the same account.';
}

include __DIR__ . '/../Html/log_in.html';
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