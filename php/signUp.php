<?php
	include_once 'connect.php';

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	
	$q1 = mysql_query("SELECT username WHERE username='$user'");
	//Check for duplicate user
	if(mysql_num_rows(q1)==1){
	//Insert new user
		mysql_query("INSERT INTO users (username, password, name, email, online) VALUE ('$user', '$pass', '$name', '$email', 'FALSE')");
	}
	//Close connection
	mysql_close();
?>
