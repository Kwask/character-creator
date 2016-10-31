<?php

function drawNavbar()
{
	?>

	<table><tr>
	<td><button type="button" onclick="location.href='index.php'">Home</button></td>

	<?php

	if(!empty($_SESSION["logged_in"]) && !empty($_SESSION["username"]))
	{
		echo "<td>Hello <b>" . htmlentities($_SESSION["username"]) . "</b>";
		echo " <button type='button' onclick=\"location.href='logout.php'\"> Logout</a></td>";
	}
	else
	{ 
		$filename = basename(($_SERVER['PHP_SELF']));
		
		if($filename!="login.php")
		{
			?>
			<td><button type="button" onclick="location.href='login.php'">Login</button></td>
			<?php
		}

		if($filename!='register.php')
		{
			?>
			<td><button type="button" onclick="location.href='register.php'">Register</button></td>
			<?php
		}

		echo "</td>";
	}

	echo "</tr></table><hr>";

}
