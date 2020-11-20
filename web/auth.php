<?php
// Start the session
session_start();
?>
<?php
$login = 'admin';
$password = '1111';
if ($_POST["login"] === $login && $_POST["password"] === $password) {
    $_SESSION['auth'] = true;
} else
    $_SESSION['auth'] = false;
?>
<?php header("Location: restricted.php"); ?>