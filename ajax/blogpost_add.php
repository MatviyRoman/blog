<?php
    $title = trim(filter_var($_POST['blogpost_title'], FILTER_SANITIZE_STRING));
    $intro = trim(filter_var($_POST['blogpost_intro'], FILTER_SANITIZE_STRING));
    $text = trim(filter_var($_POST['blogpost_text'], FILTER_SANITIZE_STRING));

    $error = '';

    if(strlen($title) <= 3)
    $error = 'Please enter title';
    elseif (strlen($intro) <= 15)
    $error = 'Please enter intro';
    else if (strlen($text) <= 20)
    $error = 'Please enter text';

    if($error != '') {
        echo $error;
        exit();
    }

    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/config.php';

    $sql = 'INSERT INTO blogpost(title, intro, text, date, author) VALUES(?, ?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$title, $intro, $text, time(), $_COOKIE['login']]);

    echo 'OK';

?>