<?php
    
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));

    $error = '';
    if (strlen($login) <= 3)
    $error = 'Please enter login';
    else if (strlen($password) <= 3)
    $error = 'Please enter password';

    if($error != '') {
        echo $error;
        exit();
    }


    $hash = 'gygyhfjfjfjfjfuy55j55j5hguhcjhdfdgfydfhr7';
    $password = md5($password . $hash);

    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/config.php';

    $sql = 'SELECT `id` FROM `users` WHERE `login` = :login && `password` = :password';
    $query = $pdo->prepare($sql);
    $query->execute(['login' => $login, 'password' => $password]);

    $user = $query->fetch(PDO::FETCH_OBJ);

    if($user->id == 0) {
        echo 'Not this user or wrong password';
        exit();
    } else {
        setcookie('login', $login, time() + 3600 * 24 * 30, '/');
        echo 'OK';
    }
    

?>