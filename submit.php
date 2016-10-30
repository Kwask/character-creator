<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>chirzel</title>
</head>
<body>
	<div class="f1">
	<label>Name:</label><b><?php print(htmlspecialchars($_POST['name'])) ?></b>
	<br>
	<label>Gender:</label><b><?php print(htmlspecialchars($_POST['gender'])) ?></b>
	<br>
	<label>Class:</label><b><?php print(htmlspecialchars($_POST['class'])) ?></b>
	</div>
</body>
</html>