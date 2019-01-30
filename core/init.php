<?php 
	session_start();
	include_once "database/connection.php";
	include "classes/user.php";
	$_SESSION['url'] = $_SERVER['REQUEST_URI']; 

	// define("BASE_URL", "http://localhost/Capstone2/");

 ?>