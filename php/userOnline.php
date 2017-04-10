<?php
//Connect mysql
	include_once 'connect.php';

	echo "<h4>Online</h4>";

	echo "<ul>";
	//Get user with status online
	$query = mysql_query("SELECT name FROM users WHERE online='TRUE'");

	while($row = mysql_fetch_assoc($query)){
		echo "<li>" . $row['name'] . "</li>";
	}
	echo "</ul>";
	echo "<h4>Offline</h4>";
	echo "<ul>";

	//Get user who's status set to offline
	$query = mysql_query("SELECT name FROM users WHERE online='FALSE'");

	while($row = mysql_fetch_assoc($query)){
		echo "<li>" . $row['name'] . "</li>";
	}

	echo "</ul>";

	//End connection
	mysql_close();
?>
