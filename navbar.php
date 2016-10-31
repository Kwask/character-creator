<?php

function drawNavbar()
{
	echo "<table><tr>";
	echo "<td><a href='index.php'>Home</a></td>";

	if(!empty($_SESSION["logged_in"]) && !empty($_SESSION["username"]))
	{
		echo "<td>Hello " . htmlentities($_SESSION["username"]) . "</td>";
		echo "<td><a href='logout.php'>Logout</a></td>";
	}
	else
	{ 
		$filename = basename(($_SERVER['PHP_SELF']));
		
		if($filename!="login.php")
		{
			echo "<td><a href='login.php'>Login</a></td>";
		}

		if($filename!='register.php')
		{
			echo "<td><a href='register.php'>Register</a></td>";
		}

		echo "</td>";
	}

	echo "</tr></table><hr>";

}
