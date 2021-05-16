<?php
if ($_COOKIE['login'] == '') :
    $website_title = '/ Authorization';
else :
    $website_title = '/ You Authorization';
endif;
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main class="main">
    <div class="container">
        <div class="box block">

            <?php
            if ($_COOKIE['login'] == '') :
            ?>
            <h4>Form Authorization</h4>
            <!-- <form action="reg.php" method="post" class="form_reg"> -->
            <form class="form_auth">
                <p>
                    <!-- <label for="login">Enter Login</label> -->
                    <input type="text" placeholder="Enter login" name="login" id="login" class="form-control">
                </p>
                <p>
                    <!-- <label for="password">Enter Password</label> -->
                    <input type="text" placeholder="Enter password" name="password" id="password" class="form-control">
                </p>
                <p class="error" id="error"></p>
                <p><button type="button" id="auth_user" class="btn">Authorization</button></p>
            </form>
            <?php
            else :
            ?>
            <h2>login: <?= $_COOKIE['login'] ?></h2>
            <?php
            endif;
            ?>
        </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    </div>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>