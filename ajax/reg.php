<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

$sql = 'SELECT `login`, `email` FROM `users` WHERE `login` = :login || `email` = :email';
$query = $pdo->prepare($sql);
$query->execute(['login' => $login, 'email' => $email]);

$user = $query->fetch(PDO::FETCH_OBJ);

$errors = [];

if ($user->login == $login)
    $errors[] = 'This login is already registered';
if ($user->email == $email)
    $errors[] =  'This email is already registered';
if (strlen($username) <= 3)
    $errors[] = 'Please enter name';
if (strlen($email) <= 3)
    $errors[] = 'Please enter email';
if (strlen($login) <= 3)
    $errors[] = 'Please enter login';
if (strlen($password) <= 3)
    $errors[] = 'Please enter password';

if ($errors != []) {
    foreach ($errors as $error) {
        print $error . '<br>';
    }
    exit();
}

setcookie('login', $login, time() + 3600 * 24 * 30, '/');


$hash = 'gygyhfjfjfjfjfuy55j55j5hguhcjhdfdgfydfhr7';
$password = md5($password . $hash);

$sql = 'INSERT INTO users(username, email, login, password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $email, $login, $password]);

echo 'OK';