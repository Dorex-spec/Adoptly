<?php
session_start();
$_SESSION = [];
session_destroy();

header('Location: ../php/sign_in.php');
exit;
