<!--

    Description: Uses as a header and navigation panel in other php files.

-->

<header>
	<a href="index.php"><img id="logo" src="images/blog.png" alt="Blog"></a>
	<h1><a href="index.php">My Blog - <?= $header ?></a></h1>
</header>
<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="create.php">New Blog</a></li>
	</ul>
</nav>