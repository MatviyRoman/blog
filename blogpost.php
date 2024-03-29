<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$sql = 'SELECT * FROM `blogpost` WHERe `id` = :id';
$query = $pdo->prepare($sql);
$query->execute(['id' => $_GET['id']]);
$blogpost = $query->fetch(PDO::FETCH_OBJ);

// while ($row = $query->fetch(PDO::FETCH_OBJ)) {
//     echo "<div class=\"blogpost\">
//         <h1>$row->title</h1>
//         <p>$row->intro</p>
//         <p>$row->date</p>
//         <p class=\"bottom\">
//             <span class=\"author\">Author: $row->author</span>
//             <a href=\"/blogpost/?id=$row->id\" title=\"$row->title\">
//                 <button class=\"btn read_more\">Read more</button>
//             </a>       
//         </p>

//     </div>";
// }

$website_title = '/ Blogpost - ' . $blogpost->title;
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<main class="main">
    <div class="container">
        <div class="box block">
            <?php
            echo "<div class=\"blogpost\">
                <h1>$blogpost->title</h1>
                <p>$blogpost->intro</p>
                <p>$blogpost->text</p>
                <p>Date: " . date("H:i:s", $blogpost->date) . "</p>";

            $date = date('d ', $blogpost->date);
            $array = ['Січень', 'Лютий', 'Березеня', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень'];
            $date .= $array[date('n', $blogpost->date) - 1];
            $date .= date(' H:i', $blogpost->date);

            ?>
            <p><b>Time: </b><u><?= $date ?></u></p>
            <?php

            echo "<p class=\"bottom\">
                    <span class=\"author\">Author: $blogpost->author</span>    
                </p>

            </div>";

            // echo "<p class=\"bottom\">
            //         <span class=\"author\">Author: $blogpost->author</span>
            //         <a href=\"/blogpost/?id=$row->id\" title=\"$blogpost->title\">
            //             <button class=\"btn read_more\">Read more</button>
            //         </a>       
            //     </p>

            // </div>";

            ?>
            <div class="comments">
                <h3>Comments</h3>
                <form action="/blogpost/?id=<?= $_GET['id'] ?>" class="form_reg" method="post">
                    <p>
                        <!-- <label for="username">Title blogpost</label> -->
                        <input type="text" value="<?= $_COOKIE['login'] ?>" placeholder="Your name" name="user_name"
                            id="user_name" class="form-control">
                    </p>
                    <p>
                        <!-- <label for="username">Title blogpost</label> -->
                        <input type="text" placeholder="Your email" name="user_email" id="user_email"
                            class="form-control">
                    </p>
                    <p><textarea placeholder="Your comment" name="user_comment" id="user_comment"
                            class="user_comment"></textarea></p>

                    <p class="error" id="error"></p>

                    <p><button type="submit" id="comment_add" class="btn">Add comment</button></p>
                </form>

                <?php

                if ($_POST['user_name'] != '' && $_POST['user_comment'] != '') {
                    $user_name = trim(filter_var($_POST['user_name'], FILTER_SANITIZE_STRING));
                    $user_email = trim(filter_var($_POST['user_email'], FILTER_SANITIZE_EMAIL));
                    $user_comment = trim(filter_var($_POST['user_comment'], FILTER_SANITIZE_STRING));

                    $sql = 'INSERT INTO comments(user_name, user_email, user_comment, blogpost_id) VALUES(?, ?, ?, ?)';
                    $query = $pdo->prepare($sql);
                    $query->execute([$user_name, $user_email, $user_comment, $_GET['id']]);

                    //$error = '';

                    // if (strlen($user_name) <= 3)
                    //     $error = 'Please enter name';
                    // elseif (strlen($user_email) <= 3)
                    //     $error = 'Please enter email';
                    // else if (strlen($user_comment) <= 3)
                    //     $error = 'Please enter login';

                    // if ($error != '') {
                    //     echo $error;
                    //     exit();
                    // }
                }

                // if ($_POST['user_name'] && $_POST['user_comment'] != '') {
                //     echo 'error';
                // }

                $sql = 'SELECT * FROM comments WHERE blogpost_id = :id ORDER BY id DESC';
                $query = $pdo->prepare($sql);
                $query->execute(['id' => $_GET['id']]);
                $comments = $query->fetchAll(PDO::FETCH_OBJ);

                foreach ($comments as $comment) {
                    echo "<div class='comment'>
                        <h4>Name: $comment->user_name</h4>
                        <h5>Email: $comment->user_email</h5>
                        <p>Comment: $comment->user_comment</p>
                    </div>";
                }

                ?>
            </div>
        </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php'; ?>
    </div>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>