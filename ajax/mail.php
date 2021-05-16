<?php
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$message = trim(filter_var($_POST['message'], FILTER_SANITIZE_STRING));

$error = '';

if (strlen($name) <= 3)
    $error = 'Please enter name';
elseif (strlen($email) <= 3)
    $error = 'Please enter email';
else if (strlen($message) <= 3)
    $error = 'Please enter message';

// if ($error != '') {
//     echo $error;
//     exit();
// }

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$sql = 'INSERT INTO messages(name, email, message) VALUES(?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$name, $email, $message]);

$my_email = 'matviy.pp.ua@gmail.com';
$subject = '=?utf-8?B?' . base64_encode('New message from site') . '?=';
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n"; //Content-type: text/plain; //простий текст без html

mail($my_email, $subject, $message, $headers);

echo 'OK';