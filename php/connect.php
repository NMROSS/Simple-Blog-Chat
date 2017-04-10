<?php
	$username = "root";
	$password = "password";
	$server   = "localhost";
	$DB		  = "ChatApp";
	
	$connection = mysql_connect($server, $username, $password);
	mysql_select_db($DB);
	
	if(!$connection){
		die("Connection Error");
	}
?>