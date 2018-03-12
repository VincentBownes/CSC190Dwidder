<?php
	include_once("db.php");

	//common utility
	
	function insertUser($name, $place){
		$name = secure($name);
		$place = secure($place);

		$q = "INSERT INTO location(name, place) VALUES ('$name', '$place')";
		executeSQL($q);
		
	}	
	
	
if(1==2){
	insertUser("vincent" , "my house");
	$arr = executeSQL("SELECT * FROM location");
	print_r($arr);
}
?>
