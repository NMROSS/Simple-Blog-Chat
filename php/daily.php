<?php
	session_start();
	//Get post value
    $daily = $_POST['daily'];
	
	//This sets which filter (Daily/All) is displayed in message box
	//if set to daily then set session true
	if($daily=="daily"){
		$_SESSION['daily'] = "TRUE";
	} else {
		$_SESSION['daily'] = "FALSE";
	}
?>
