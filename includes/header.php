<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Дата в прошлом
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <title>My First PHPBlog <?= "$website_title" ?></title>
</head>

<body>
    <header class="header">
        <div class="container">
            <h1 class="title"><a href="/">My First PHPBlog</a> <?= "$website_title" ?></h1>
            <nav class="nav">
                <ul>
                    <?php
                    if ($website_title != '') {
                        echo '<li><a href="/" class="btn index">На головну</a></li>';
                    }
                    ?>
                    <li><a href="/contacts" class="btn">Contacts</a></li>
                    <li><a href="/users" class="btn">Users</a></li>
                    <? if ($_COOKIE['login'] == '') : ?>
                    <li><a href="/auth" class="btn" id="auth">Enter</a></li>
                    <li><a href="/reg" class="btn" id="reg">Registaration</a></li>
                    <? else : ?>
                    <li><a href="/blogpost_add" class="btn" id="blogpost_adds">Add Post</a></li>
                    <li><a href="/auth" class="btn" id="auth">Admin cabinet</a></li>
                    <li><a href="/exit" class="btn exit" id="exit"><?= $_COOKIE['login'] ?> Exit</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>