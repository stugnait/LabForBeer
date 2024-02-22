<?php

global $config;
global $blog_connection;
global $lfb_connection;

include "../services/config.php";
include "../services/connectDB.php";
require "../components/Post.php";
require "../vendor/autoload.php";

$lfb_post_result = mysqli_query($lfb_connection, "SELECT * FROM `post`");

$row = mysqli_fetch_assoc($lfb_post_result);
    $post = new Post($row['postID'], $row['category'], $row['name'], $row['shortText'], $row['mainText']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require "../page-components/loader.php" ?>
    <title>LabForBeer</title>
</head>
<body>

<?php require "../page-components/header.php" ?>

<main class="white-background">
    <div class="white-background-image">
        <div class="post-container">
            <h1 class="category">БЛОГ</h1>
            <div class="post">
                <div class="post-date">
                    <?php echo $post->category ?>
                </div>
                <div class="post-background">
                    <img class="post-image" src="<?php echo $post->imageLink ?>" alt=<?php echo $post->category ?>>
                    <div class="post-filling-container">
                        <p class="post-header"><?php echo $post->name ?></p>
                        <p class="post-name"><?php echo $post->shortText ?></p>
                        <p class="post-short-text"><?php echo $post->mainText ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require "../page-components/footer.php" ?>

</body>
</html>