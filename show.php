<!--

    Description: Generates Full Post Page.

-->

<?php
    require('connect.php');
    // Ensure that any id values passed by the user are validated as integers
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if ($id) {
        // Build and prepare SQL String with :id placeholder parameter
        // Bind the :id parameter in the query to the sanitized
        // $id specifying a binding-type of Integer
        // Fetch the row selected by primary key id
        $query = "SELECT * FROM blogs WHERE id = :id LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $row = $statement->fetch();
        // Prepare the value for the Title
        $header = $row['title'];
        // Redirect to Home Page if id is not valid
    }   else {
            header("Location: index.php");
            exit;
        }
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
            <div class="blog_title">
                <!-- Output blog title, content, timestamp and editing link -->
                <!-- Format the date -->
                <h2><?= $row['title'] ?></h2>
                <p class = timestamp><?= date("F j, Y, g:i a", strtotime($row['timestamp'])) ?> <a href="edit.php?id=<?= $row['id'] ?>">edit</a></p>
                <!-- Reconstruct paragraphs -->
                <div class='blog_content'><?= nl2br($row['content']) ?></div>
            </div>
        </div>
    </main>
</body>
</html>