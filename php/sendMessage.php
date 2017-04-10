<?php
	session_start();
	//connect mysql
	include_once 'connect.php';
	
	//Escapes character prevent breaking strings
	$message = mysql_escape_string($_POST['message']);
	$userID = $_SESSION['id'];
	
	//Sent message to server
	if($_SESSION['loggedIn']=='TRUE') {
		$query = "INSERT INTO messages (id, message, datetime) VALUES ($userID, '$message', NOW())";
		$result = mysql_query($query);
	}
	//close connection
	mysql_close();
?>
