<?php

$username = $_POST['user'];
$password = $_POST['password'];

if (!file_exists('logindata/' . $username . '.txt')) {
    header('Location: loginScreen.php?message=このユーザー名は存在しません');
    exit;
} else {
    $file = fopen('logindata/' . $username . '.txt', 'r');
    $savedPassword = fgets($file);
    fclose($file);
}
