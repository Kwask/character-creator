<?php
$char = new Character;

$char->save_user();

class Character
{
	public $name;
	public $gender;
	public $class;

	function save_user()
	{
		echo "Save character code goes here!";
	}
}

?>
