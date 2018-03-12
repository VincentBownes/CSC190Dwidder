<?php

	include_once("common.php");	

	$name = $_POST["name"];
	$place = $_POST["place"];
	
	insertUser($name, $place);
	exit("ok");
	

?>
