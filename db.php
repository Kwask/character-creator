<?php

require_once './config/db_config.php';

// This function creates a new db connection if one doesnt currently exist
function db_connect()
{
	static $conn;

	// If the connection isn't already active
	if(!isset($conn))
	{
		global $db_config;
		$conn = new mysqli(	$db_config['hostname'], 
												$db_config['username'], 
												$db_config['password'], 
												$db_config['db']);
	}

	// If we had a bad connection
	if($conn->connect_error)
	{
		die($conn->connect_error);
	}

	return $conn;
}
