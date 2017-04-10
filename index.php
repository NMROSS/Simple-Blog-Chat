<!DOCTYPE html>
<html>
	<head>
		<title>Chat Application</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>	
		<script src="js/userInteraction.js"></script>
		<?php session_start(); include_once 'php/connect.php'; ?>
	</head>
	<body>
		<!-- Navagation bar - login/sign up/logout -->
		<div id="header">
			<ul>
				<?php
 					if((isset($_SESSION['loggedIn'])=="TRUE")){
						echo '<li><a href="JavaScript:message()">Message</a></li>';
						echo '<li><a href="JavaScript:logout()">Logout</a></li>';
						//echo '<li><a>'. $_SESSION['user'].'</a></li>';

					} else {
						echo '<li><a href="JavaScript:loginShow()">Login</a> </li>';
						echo '<li><a href="JavaScript:signUpShow()">Sign Up</a></li>';
					}	
				?>

				
			</ul>
		</div>
		<!-- Hold users and content div together -->
		<div id="container">
			<!-- Display users online/offline -->
			<div id="users">
					<script>
					usersOnlineUpdate();
					</script>
			</div>
			<!-- House main content -->
			<div id="content">
				<div class="divAlign" id="login">
					<h3>Login</h3>
					<form action="JavaScript:login()">
						<label class="formAlign" for="user">User Name</label>
						<input id="user" type="text" name="userName" value=""/>
						<br />
						<label class="formAlign" for="pass">Password</label>
						<input id="pass" type="password" name="password" value=""/>
						<br />
						<span id="loginStatus"> </span>
						<input type="submit" value="Login"/>
						<input type="button" onclick="JavaScript:start()" value="Cancel" />
					</form>
				</div>
				<div class="divAlign" id="signUp">
					<form action="javascript:signUp()">
						<h3>Sign Up</h3>
						<label class="formAlign" for="sUser">User Name</label>
						<input id="sUser" type="text" name="userName" value=""/>
						<br />
						<label class="formAlign" for="sPass">Password</label>
						<input id="sPass" type="password" name="password" value=""/>
						<br />
						<label class="formAlign" for="sName">Name</label>
						<input id="sName" type="text" name="sName" value=""/>
						<br />
						<label class="formAlign" for="sEmail">Email</label>
						<input id="sEmail" type="email" name="sEmail" value=""/>
						<br />
						<input type="submit" value="Sign Up"/>
						<input type="button" onclick="JavaScript:start()" value="Cancel" />
					</form>
				</div>
				<div class="divAlign" id="messageContainer">
					<input type="button" onclick="Javascript:ajaxRequest('php/daily.php', 'daily=daily')" value="All Messages"/>
					<input type="button" onclick="Javascript:ajaxRequest('php/daily.php', 'daily=False')" value="Daily Messages"/>
					<div id="messages">
					<script>
					updateMessageBox();	
					</script>
					</div>
					<div id="compose">
						<form action="JavaScript:send()">
							<label for="msgCompose">Compose Message</label>
							<br />
							<input type="text" name="message" id="msgCompose" />
							<input type="submit" value="Send" onclick="JavaScript:updateMessageBox()"/>
						</form>
					</div>
				</div>
			</div>
		</div>
 	</body>
</html>
