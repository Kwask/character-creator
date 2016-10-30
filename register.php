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
	<?php drawNavbar() ?>
	
	<h1>Register</h1>
	
	<div class="f1">
	<form action="index.php" onsubmit="return verifyRegistrationForm()" method="post" autocomplete="off" id="register_form">
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
</body>
</html>
