<!--

    Description: Creates, updates, deletes blogs and generates an validation error message.

-->

<?php
	require('connect.php');
	// Update section
	// UPDATE blog if title, content and id were presented in POST, and "Update Blog" button was pressed
	if (isset($_POST['update']) && isset($_POST['id']) && (!empty($_POST['title']) || strlen($_POST['title']) >= 1) && (!empty($_POST['content']) || strlen($_POST['content']) >= 1)) {
		// Sanitize user input to escape HTML sections and filter out dangerous characters
		$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        // Build the parameterized SQL query and bind to the above sanitized values
		$query = "UPDATE blogs SET title = :title, content = :content WHERE id = :id LIMIT 1";
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);        
        $statement->bindValue(':content', $content);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        // Redirect to Home Page if variables are not valid
        header("Location: index.php");
        exit;
        // Delete section
        // DELETE blog if id was presented in POST, and "Delete" button was pressed
	}	elseif (isset($_POST['delete']) && isset($_POST['id'])) {
			$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
			// Build the parameterized SQL query and bind to the above sanitized value
	        $query = "DELETE FROM blogs WHERE id = :id LIMIT 1";
	        $statement = $db->prepare($query);
	        $statement->bindValue(':id', $id, PDO::PARAM_INT);
	        $statement->execute();
	        // Redirect to Home Page if variables are not valid
	        header("Location: index.php");
		    exit;
		    // Create section
		    // CREATE blog if title and content were presented in POST, and "Submit Blog" button was pressed
		}	elseif (isset($_POST['create']) && (!empty($_POST['title']) || strlen($_POST['title']) >= 1) && (!empty($_POST['content']) || strlen($_POST['content']) >= 1)) {
				// Sanitize user input to escape HTML sections and filter out dangerous characters
				$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		        // Build the parameterized SQL query and bind to the above sanitized values
		        $query = "INSERT INTO blogs (title, content) VALUES (:title, :content)";
		        $statement = $db->prepare($query);
		        $statement->bindValue(':title', $title);
		        $statement->bindValue(':content', $content);
		        $statement->execute();
		        // Redirect to Home Page if variables are not valid
		        header("Location: index.php");
		        exit;
		    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <main>
        <div id="all_blogs">
        	<!-- Validation error message -->
        	<h1>An error occurred while processing your post.</h1>
  			<p>Both the title and content must be one or more characters.</p>
  			<a href="index.php">Return Home</a>
        </div>
    </main>
</body>
</html>