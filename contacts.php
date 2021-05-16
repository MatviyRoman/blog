<?php
$website_title = '/ Contacts';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main class="main">
    <div class="container">
        <div class="box block">
            <h4>Form <?= $website_title ?></h4>
            <!-- <form action="reg.php" method="post" class="form_reg"> -->
            <form class="form_reg">
                <p>
                    <!-- <label for="username">Enter Name</label> -->
                    <input type="text" placeholder="Enter Name" name="name" id="name" value="<?= $_COOKIE['login'] ?>"
                        class="form-control">
                </p>
                <p>
                    <!-- <label for="email">Enter email</label> -->
                    <input type="email" placeholder="Enter email" name="email" id="email" class="form-control">
                </p>
                <p>
                    <!-- <label for="login">Enter Login</label> -->
                    <!-- <input type="text" placeholder="Enter message" name="login" id="login" class="form-control"> -->
                    <textarea placeholder="Enter message" name="text" id="message" class="message"></textarea>
                </p>

                <p class="error" id="error"></p>

                <p><button type="button" id="send_email" class="btn">Send email</button></p>
            </form>
        </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    </div>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>