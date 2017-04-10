<?php
//Connect mysql
include_once 'connect.php';
session_start();

//Get daily messages
$query1 = ("SELECT * FROM messages WHERE DATE( datetime) = CURDATE()");
//Get all messages
$Altquery = ("SELECT * FROM messages");

//If filter set in daily.php true then show all messages
if($_SESSION['daily']=="TRUE"){
	$query1 = $Altquery;
}

//execute query
$query1 = mysql_query($query1);

while ($row = mysql_fetch_assoc($query1)) {
	$ID = $row['id'];
	//get name for message associated with aboves id
	$query2 = mysql_query("SELECT name FROM users WHERE id='$ID'");
	
	while ($row2 = mysql_fetch_assoc($query2)) {
		//Format date of message
		$dt = date('D H:i', strtotime($row['datetime']));
		//Display message
		echo "<span class=\"msg\">" .'[' . $dt . ']<b>' . $row2['name'] . '</b>:' . $row['message'] . "</span>";
	}
}
//Close connection
mysql_close();
?>
