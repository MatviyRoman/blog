<?php $website_title = '/ Error 404';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/config.php';
    require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/header.php'; 
?>


<div class="error">
    <div class="container">
        <div class="error_text">
            <?php echo '<p class="text">Error 404 <a href="./">Go to home</a></p>'; ?>
        </div>
    </div>
</div>

<?php  require_once $_SERVER['DOCUMENT_ROOT'] .'/includes/footer.php'; ?>