<?php 
	require_once "./navbar.php";
	require_once "./db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Login</title>
</head>
<body>
	<?php drawNavbar() ?>

	<h1>Login</h1>
	
	<div class="f1">
		<?php 
			echo basename(($_SERVER['PHP_SELF']));
		?>
	</div>
</body>
</html>