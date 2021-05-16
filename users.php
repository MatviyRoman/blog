<?php

    $website_title = '/ Users list';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

    echo '<div class="users block"><div class="container">';

    // $query = $pdo->query('SELECT * FROM `users`');
    // while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    //     echo '<div class="user"><h1>' . $row['username'] . '</h1><p><b>Email: </b>' . $row['email'] . '</p>' . '<p><b>Login: </b>' . $row['login'] . '</p>' . '<p><b>Password: </b>' . $row['password'] . '</p></div>';
    // }

        $query = $pdo->query('SELECT * FROM `users` ORDER BY `id` DESC LIMIT 3'); //DESC OR ASC
    while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<div class="user">' . $row->id . '<h1>' . $row->username . '</h1><p><b>Email: </b>' . $row->email . '</p>' . '<p><b>Login: </b>' . $row->login . '</p>' . '<p><b>Password: </b>' . $row->password . '</p></div>';
    }


    // search
    $username = 'roman@matviy.pp.ua';
    echo '<h1>Search: ' . $username . '</h1>';
   
    // $sql = 'SELECT `username`, `id`, `email` FROM `users` WHERE `username` = ?';
    // $query = $pdo->prepare($sql);
    // $query->execute([$username]);

    $id = 3;
    $sql = 'SELECT `username`, `id`, `email` FROM `users` WHERE `username` = :name && `id` >= :id';  //асоціативні ключі
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $username, 'id' => $id]);

    

    $users = $query->fetchAll(PDO::FETCH_OBJ); //FETCH_OBJ FETCH_ASSOC

    print 'var_dump($users) ';
    var_dump($users);

    print '<br><br>print_r($users) ';
    print_r($users);

    foreach($users as $user) {
        echo '<div class="search"><h1>' . $user->username . '</h1>' . '<p><b>Email:</b> ' . $user->email . '</p></div>';
    }


     $sql = 'SELECT * FROM `users` WHERE `id` >= :id';  //асоціативні ключі
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    $user = $query->fetch(PDO::FETCH_OBJ); //FETCH_OBJ FETCH_ASSOC //fetch show one string
    echo $user->email;
    

     echo '</div></div>';

    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/footer.php';
    
?>