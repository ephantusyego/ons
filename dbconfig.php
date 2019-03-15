<?php
	
	$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "ons";
	
	try {
		$conn = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		//$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $ex){
		die($ex->getMessage());
	}