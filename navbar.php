<?php

function drawNavbar()
{
	echo "<table><tr>";
	echo "<td><a href='index'>Home</a>  |  </td>";

	if(!empty($_SESSION["logged_in"]) && !empty($_SESSION["username"]))
	{
		echo "<td>Hello " . htmlentities($_SESSION["username"]) . "</td>";
	}
	else
	{ 
		$filename = basename(($_SERVER['PHP_SELF']));

		echo "<td>";
		if($filename=='login.php')
		{
			echo "<a href='register.php'>Register</a>";
		}elseif($filename=="register.php")
		{
			echo "<a href='login.php'>Login</a>";
		}else
		{
			echo "<a href='login.php'>Login</a> or <a href='register.php'>Register</a>";
		}

		echo "</td>";
	}

	echo "</tr></table><hr>";

}
