<!--

    Description: Blog editing and deleting.

-->

<?php
    // Add authentication script
    require 'authenticate.php';
    require('connect.php');
    // Ensure that any id values passed by the user are validated as integers
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if ($id) {
        // Build and prepare SQL String with :id placeholder parameter
        // Bind the :id parameter in the query to the sanitized
        // $id specifying a binding-type of Integer
        // Fetch the row selected by primary key id
        $query = "SELECT * FROM blogs WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $blog = $statement->fetch();
        // Redirect to Home Page if id is not valid
    }   else {
            header("Location: index.php");
            exit;
        }
        // Prepare the value for the Title
        $header = "Editing {$blog['title']}";
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
                        <!-- Hidden input for the quote primary key -->
                        <input type="hidden" name="id" value="<?= $blog['id'] ?>">
                    <p>
                        <!-- Retrieve Title and Content are echoed into the input value attributes -->
                        <label for="title">Title</label>
                        <input name="title" id="title" value="<?= $blog['title'] ?>" />
                    </p>
                    <p>
                        <label for="content">Content</label>
                        <textarea name="content" id="content"><?= $blog['content'] ?></textarea>
                    </p>
                    <p>
                        <!-- Button has "update" name parameter -->
                        <button type="submit" class="submit" name="update">Update Blog</button>
                        <!-- Button has "delete" name parameter -->
                        <button type="submit" class="submit" name="delete" onclick="return confirm('Are you sure you wish to delete this blog?')">Delete</button>
                    </p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>