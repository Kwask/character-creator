<?php 
	require_once "./navbar.php";
	require_once "./db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="helpers.js"></script>
	<script src="register_func.js"></script>
	<title>Register</title>
</head>
<body>
	<?php drawNavbar();
	
	if(!empty($_POST["username"]) || !empty($_POST["password1"]))
	{
		$conn = db_connect();
		$username = mysqli_real_escape_string($conn, $_POST["username"]);
		$password = md5(mysqli_real_escape_string($conn, $_POST["password1"]));
		$email =  mysqli_real_escape_string($conn, $_POST["email0"]);

		$query_username = "SELECT * FROM users WHERE username='{$username}'";
		$query_email = "SELECT * FROM users WHERE email='{$email}'";

		$result_username = $conn->query($query_username);
		if(!$result_username)
		{
			die($conn->error);
		}

		$result_email = $conn->query($query_email);
		if(!$result_email)
		{
			die($conn->error);
		}

		$rows_username = $result_username->num_rows;
		$rows_email = $result_email->num_rows;

		if($rows_username >= 1)
		{
		?>
			<div class="f1">
				<center>Sorry that username is taken! Please <a href="register.php">try again</a>.</center>
			</div>
		<?php
		}else	if($rows_email >= 1)
		{
		?>
			<div class="f1">
				<center>That email is tied to an existing account! Please <a href="register.php">try again</a>.</center>
			</div>
		<?php
		}else
		{
			$register_query = "INSERT INTO users (username, password, email) VALUES ('".$username."', '".$password."', '".$email."')";
			$conn->query($register_query);
			if($conn->error)
			{
				die($conn->error);
			}
			else
			{
				$_SESSION["logged_in"] = TRUE;
				$_SESSION["username"] = $username;
				$_SESSION["email"] = $email;
			?>
				<div class="f1">
					<center>Successfully registered! You may now return to the <a href="index.php">home page</a>.</center>
				</div>
			<?php
			}
		}
	}else
	{
	?>
		<h1>Registration</h1>
		
		<div class="f1">
		<form action="register.php" onsubmit="return verifyRegistrationForm()" method="post" autocomplete="off" id="register_form">
			<div>
			<label>Username:</label>
			<input name="username" type="text" onfocus="return setInputStatus('f1_t1')">
			<div class="hidden" id="f1_t1">Error</div>
			</div>
			<br>
			
			<div>
			<label>Password:</label>
			<input name="password0" type="password" onfocus="return setInputStatus('f1_t2')">
			<div class="hidden" id="f1_t2">Error</div>
			</div>
			<br>
			
			<div>
			<label>Password (again):</label>
			<input name="password1" type="password" onfocus="return setInputStatus('f1_t3')">
			<div class="hidden" id="f1_t3">Error</div>
			</div>
			<br>
			
			<div>
			<label>Email:</label>
			<input name="email0" type="text" onfocus="return setInputStatus('f1_t4')">
			<div class="hidden" id="f1_t4">Error</div>
			</div>
			<br>
			
			<div>
			<label>Email (again):</label>
			<input name="email1" type="text" onfocus="return setInputStatus('f1_t5')">
			<div class="hidden" id="f1_t5">Error</div>
			</div>
			<br>
			
			<div class=b1>
				<button type="submit" form="register_form">Register</button>
			</div>
		</form>
		</div>
	<?php 
	}
	?>

</body>
</html>
