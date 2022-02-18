<!--

    Description: Generates Home Page with five most
    recent blog posts displayed in reverse chronological order.

-->

<?php
    require('connect.php');
    // Build and prepare SQL string.
    // A PDO::Statement is prepared from the query.
    // Execution on the DB server
    $query = "SELECT * FROM blogs ORDER BY id DESC LIMIT 5";
    $statement = $db->prepare($query);
    $statement->execute();
    $blogs = $statement->fetchAll();
    // Prepare the value for the Title
    $header = "Home Page";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog - <?= $header ?></title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <main>
        <?php include('header.php'); ?>
        <div id="all_blogs">
            <!-- Loop through the retrieved rows -->
            <!-- Format the date -->
            <?php foreach($blogs as $blog): ?>
                <div class="blog_title">
                    <h2><a href="show.php?id=<?= $blog['id'] ?>"><?= $blog['title'] ?></a></h2>
                    <p class = timestamp><?= date("F j, Y, g:i a", strtotime($blog['timestamp'])) ?> <a href="edit.php?id=<?= $blog['id'] ?>">edit</a></p>
                    <!-- Truncate content to 200 characters -->
                    <?php if (strlen($blog['content']) > 200): ?>
                        <div class='blog_content'>
                            <?= substr_replace($blog['content'], "...", 200) ?><a href="show.php?id=<?= $blog['id'] ?>">Read More</a>
                        </div>
                    <?php else: ?>
                        <div class='blog_content'><?= $blog['content'] ?></div>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </main>
</body>
</html>