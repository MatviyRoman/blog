<?php
if ($_COOKIE['login'] == '') {
    header('Location: /reg');
    exit();
}
$website_title = '/ ADD BLOGPOST';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main class="main">
    <div class="container">
        <div class="box block">
            <h4>ADD blogpost</h4>
            <!-- <form action="reg.php" method="post" class="form_reg"> -->
            <form class="form_reg">
                <p>
                    <!-- <label for="username">Title blogpost</label> -->
                    <input type="text" placeholder="Title blogpost" name="blogpost_title" id="blogpost_title"
                        class="form-control">
                </p>
                <p><input placeholder="blogpost intro" type="text" name="blogpost_intro" id="blogpost_intro"
                        class="blogpost_intro"></input></p>
                <p><textarea placeholder="blogpost text" name="blogpost_text" id="blogpost_text"
                        class="blogpost_text"></textarea></p>

                <p class="error" id="error"></p>

                <p><button type="button" id="blogpost_add" class="btn">Add post</button></p>
            </form>
        </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    </div>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>