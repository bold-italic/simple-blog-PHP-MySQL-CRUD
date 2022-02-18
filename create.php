<!--

    Description: New Blog form creation.

-->

<?php
    // Add authentication script
    require 'authenticate.php';
    // Prepare the value for the Title
    $header = "Post a New Blog";
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
            <!-- Create form -->
            <form action="process.php" method="post">
                <div id="form">
                    <p>
                        <label for="title">Title</label>
                        <input name="title" id="title" />
                    </p>
                    <p>
                        <label for="content">Content</label>
                        <textarea name="content" id="content"></textarea>
                    </p>
                    <p>
                        <!-- Button has "create" name parameter -->
                        <button type="submit" class="submit" name="create">Submit Blog</button>
                    </p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>