<?php
$website_title = '';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main class="main">
    <div class="container">
        <div class="box block">
            <?php
            $sql = 'SELECT * FROM `blogpost` ORDER BY `date` DESC LIMIT 5';
            $query = $pdo->query($sql);
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo "<div class=\"blogpost\">
                        <h1>$row->title</h1>
                        <p>$row->intro</p>";

                echo "<p>$date</p>
            <p class=\"bottom\">
                <span class=\"author\">Author: $row->author</span>
                <a href=\"/blogpost/?id=$row->id\" title=\"$row->title\" class=\"btn read_more\">
                    Read more
                </a>
            </p>

        </div>";
            }
            ?>
        </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    </div>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>