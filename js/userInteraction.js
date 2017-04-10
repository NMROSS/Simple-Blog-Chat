//Global variable
var loginRequest = new XMLHttpRequest();

//Reset page to blank
function start() {
	//Find all div with class divAlign
	divEle = document.getElementsByClassName('divAlign');
	//Hide divs
	for(var i = 0; i < divEle.length; i++)
	{
		divEle[i].style.display = "none";
	}
	usersOnlineUpdate();
}

function loginShow(){
	//Hide other divs e.g sign up
	start();
	loginDiv = document.getElementById('login');
	loginDiv.style.display = "inline";
}

function signUpShow(){
	//Hide other divs e.g login
	start();
	signDiv = document.getElementById('signUp');
	signDiv.style.display = "inline";
}

//Create ajaxrequest
function ajaxRequest(url, data, responseCall){
	var xhrObject = new XMLHttpRequest();
	
	xhrObject.onreadystatechange = function() {
		//What state the data is in
		if(xhrObject.readyState == 4){
			//Is response correct (200)
			if(xhrObject.status == 200){
				//Call function to deal with response
				responseCall(xhrObject.response);
			}
		}
	};
	
	xhrObject.open("POST", url, true);
	xhrObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhrObject.send(data);
	
}

function login(){
	var url = "php/login.php";
	//get username passwords from text fields
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	var dataString = "user=" + user + "&pass=" + pass;
	
	ajaxRequest(url, dataString, loginStatus);
}

function loginStatus(response){
	var lStatus = document.getElementById("loginStatus");

	lStatus.innerHTML = response;
	//If logged change nav bar links
	if(lStatus.innerHTML == "TRUE"){
		message();
		var headDiv = document.getElementById("header");
		headDiv.innerHTML = '<li><a href="JavaScript:message()">Message</a></li><li><a href="JavaScript:logout()">Logout</a></li>';
	}
	
}

function signUp(){
	var user = document.getElementById("sUser").value;
	var pass = document.getElementById("sPass").value;
	var email = document.getElementById("sEmail").value;
	var name = document.getElementById("sName").value;
	
	//Send signup details to php sign up script script
	var data = "user="+user+"&pass="+pass+"&email="+email+"&name="+name;
	ajaxRequest("php/signUp.php", data, function(){
		start();
	});
	
}

//Send message
function send(){ 
	var message = document.getElementById("msgCompose").value;
	ajaxRequest('php/sendMessage.php', "message="+message, updateMessageBox);
	document.getElementById("msgCompose").value = "";
}

//Updates messages in message box
function updateMessageBox(){
	ajaxRequest('php/messages.php','',function(response){
		document.getElementById("messages").innerHTML = response;
	});
	setTimeout(updateMessageBox, 3000);
}

//Shows message box
function message(){
	start();
	msgDiv = document.getElementById('messageContainer');
	msgDiv.style.display = "inline";
	updateMessageBox();
}
//Logout and change nav bar links
function logout() {
	var headDiv = document.getElementById("header");
	headDiv.innerHTML = '<li><a href="JavaScript:loginShow()">Login</a> </li><li><a href="JavaScript:signUpShow()">Sign Up</a></li>';
	
	ajaxRequest('php/logout.php', '');
	start();
	document.getElementById('messageContainer').style.display = "inline";


}

function usersOnlineUpdate() {
	ajaxRequest('php/userOnline.php', '', function(response) {
		document.getElementById("users").innerHTML = response;
	});
}
