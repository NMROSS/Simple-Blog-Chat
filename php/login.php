<?php
	session_start();
	//Connect Mysql
	include_once 'connect.php';
	
	//Get form data
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$status = "FALSE";
	
	//See if username and password match and/or exist
	$uQuery = mysql_query("SELECT * FROM `users` WHERE username='$user' && password='$pass'");
	//If 1 result then user/pass correct
	if(mysql_num_rows($uQuery)==1){
			//Login succesful
			$status = "TRUE";
			$_SESSION['loggedIn'] = "TRUE";
			$_SESSION['user'] = $user;
			
			//Get id for user
			while($row = mysql_fetch_assoc($uQuery))
			{
				$id = $row['id'];
				$_SESSION['id'] = $id;
				//Set users status to online
				$iQuery = mysql_query("UPDATE users SET online='TRUE' WHERE id=$id");
			}
	} else {
		//Login failed
		$status = "Incorrect Username/Password <br />";
	}
	
	//Return login state
	echo $status;
	//CLose connection
	mysql_close($connection);
?>
