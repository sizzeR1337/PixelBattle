<?php

	include 'db.php';
	include 'settings.php';

    $mysqli = new mysqli(host, user, password, database);
    $mysqli->query("SET NAMES 'utf8'");

    $tempcolor = $_POST[ucolor];
    $tempid = (integer) $_POST[aidi];
	
	if($enabled == 1){

		$mysqli->query("INSERT INTO `colors`(`Number`, `Color`) VALUES ('$tempid','$tempcolor')");
		echo $tempid;
	
	}else if($enabled == 0){
		
		echo "PixelBattle has been disabled";
	
	}

    $mysqli->close();
   
?>