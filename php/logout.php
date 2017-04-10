<?php
    session_start();
    //Connect mysql
	include_once 'connect.php';
	//Get ID
	$id = $_SESSION['id'];
	//Log out user
	$query = mysql_query("UPDATE users SET online='FALSE' WHERE id=$id");

	//Destroy session cookie
	session_destroy(); 
?>
