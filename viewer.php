<?php require_once "./navbar.php" ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>chirzel</title>
</head>
<body>
	<?php drawNavbar() ?>
	<div class="f1">
	<label>Name:</label><b><?php print(htmlspecialchars($_POST['name'])) ?></b>
	<br>
	<label>Gender:</label><b><?php print(htmlspecialchars($_POST['gender'])) ?></b>
	<br>
	<label>Class:</label><b><?php print(htmlspecialchars($_POST['class'])) ?></b>
	</div>
</body>
</html>