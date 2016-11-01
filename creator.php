<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="helpers.js"></script>
	<script src="creator_func.js"></script>
	<title>Character Creator</title>
</head>
<body>
	<?php require_once "./navbar.php" ?>

	<h1>Character Creator</h1>
	
	<div class="f1">
	<form action="viewer.php" onsubmit="return verifyCharForm()" method="post" autocomplete="off" id="char_form">
		<label>Name:</label>
		<input name="name" type="text" placeholder="Name your character..." onfocus="return setInputStatus('f1_t1')">
		<div class="hidden" id="f1_t1">Error</div>
		<br>
		
		<label>Gender:</label>
		<input type="radio" name="gender" value="Male" onfocus="return setInputStatus('f1_r1')">Male</input>
		<input type="radio" name="gender" value="Female" onfocus="return setInputStatus('f1_r1')">Female</input>
		<div class="hidden" id="f1_r1">Error</div>
		<br>
		
		<label>Class:</label>
		<select class="s1" name="class" onfocus="return setInputStatus('f1_l1')">
			<option value="Warrior">Warrior</option>
			<option value="Wizard">Wizard</option>
			<option value="Rogue">Rogue</option>
			<option value="Cleric">Cleric</option>
		</select>
		<div class="hidden" id="f1_l1">Error</div>
		<br>
		
		<div class="b1">
			<button type="submit" form="char_form">Submit</button>
		</div>
	</form>
	</div>
</body>
</html>
