<?php 
    $website_title = '/ Registration';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/header.php'; 
?>

<main class="main">
    <div class="container">
        <div class="box block">
            <h4>Form Registration</h4>
            <!-- <form action="reg.php" method="post" class="form_reg"> -->
            <form class="form_reg">
                <p>
                    <!-- <label for="username">Enter Name</label> -->
                    <input type="text" placeholder="Enter Name" name="username" id="username" class="form-control">
                </p>
                <p>
                    <!-- <label for="email">Enter email</label> -->
                    <input type="email" placeholder="Enter email" name="email" id="email" class="form-control">
                </p>
                <p>
                    <!-- <label for="login">Enter Login</label> -->
                    <input type="text" placeholder="Enter login" name="login" id="login" class="form-control">
                </p>
                <p>
                    <!-- <label for="password">Enter Password</label> -->
                    <input type="text" placeholder="Enter password" name="password" id="password" class="form-control">
                </p>

                <p class="error" id="error"></p>

                <p><button type="button" id="reg_user" class="btn">Registration</button></p>
            </form>
        </div>
        <?php  require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/aside.php'; ?>
    </div>
</main>

<?php  require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/footer.php'; ?>