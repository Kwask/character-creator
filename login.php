<?php 
	require_once "./navbar.php";
	require_once "./db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="helpers.js"></script>
	<title>Login</title>
</head>
<body>
	<?php drawNavbar() ?>

	<h1>Login</h1>

	<?php
		if(!empty($_SESSION["logged_in"]) && !empty($_SESSION["username"]))
		{
			?>
				<div class="f1">
					<center>You are now logged in! Please return to the <a href="index.php">home page</a>.</center>
				</div>
			<?php
		}
		elseif(!empty($_POST["username"]) && !empty($_POST["password"]))
		{
			$conn = db_connect();

			$username = mysql_real_escape_string($_POST["username"]);
			$password = md5(mysql_real_escape_string($_POST["password"]));
			$query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";

			$login_result = $conn->query($query);

			if(!$login_result)
			{
				die($conn->error);
			}

			$rows = $login_result->num_rows;

			if($rows >= 1)
			{
				$_SESSION["username"] = $username;
				$_SESSION["email"] = $login_result->fetch_assoc()["email"];
				$_SESSION["logged_in"] = TRUE;
			?>
				<div class="f1">
					<center>Successfully logged in! You may now return to the <a href="index.php">home page</a>.</center>
				</div>
			<?php
			}else
			{
			?>
				<div class="f1">
					<center>No account with that username and password exists! Please <a href="login.php">try again</a>.</center>
				</div>
			<?php			
			}
		}
		else
		{
			?>
			<div class="f1">
			<form action="login.php" method="post" autocomplete="on" id="login_form">
				<div>
					<label>Username:</label>
					<input type="text" name="username">
					<div class="hidden" id="f1_t3">Error</div>
				</div>
				<br>

				<div>
					<label>Password:</label>
					<input type="password" name="password">
					<div class="hidden" id="f1_t3">Error</div>
				</div>

				<div class=b1>
					<button type="submit" form="login_form">Login</button>
				</div>
			</form>
			</div>
		<?php
		}
		?>
</body>
</html>