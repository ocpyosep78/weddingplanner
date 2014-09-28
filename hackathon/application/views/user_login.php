<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Wedding-Rings</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
	<script src="../resources/js/jquery-1.11.0.js"  type="text/javascript"> </script>
    <script src="../resources/js/jquery-ui-1.10.3.min.js"  type="text/javascript"> </script>
    <script type="text/javascript">
    	// This is called with the results from from FB.getLoginStatus().
    	function statusChangeCallback(response) {
	    	//console.log('statusChangeCallback');
	    	//console.log(response);
			// The response object is returned with a status field that lets the
			// app know the current login status of the person.
			// Full docs on the response object can be found in the documentation
			// for FB.getLoginStatus().
			if (response.status === 'connected') {
			  // Logged into your app and Facebook.
			  checkFBlogin();
			} else if (response.status === 'not_authorized') {
			  // The person is logged into Facebook, but not your app.
			  //document.getElementById('status').innerHTML = 'Please log ' +
			  //'into this app.';
			} else {
			  // The person is not logged into Facebook, so we're not sure if
			  // they are logged into this app or not.
			  //document.getElementById('status').innerHTML = 'Please log ' +
			  //'into Facebook.';
			}
		}

		// This function is called when someone finishes with the Login
		// Button.  See the onlogin handler attached to it in the sample
		// code below.
		function checkLoginState() {
			FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
			});
		}

		window.fbAsyncInit = function() {
			FB.init({
				appId      : '291410157729934',
				cookie     : true,  // enable cookies to allow the server to access 
				                    // the session
				xfbml      : true,  // parse social plugins on this page
				version    : 'v2.1' // use version 2.1
			});

			// Now that we've initialized the JavaScript SDK, we call 
			// FB.getLoginStatus().  This function gets the state of the
			// person visiting this page and can return one of three states to
			// the callback you provide.  They can be:
			//
			// 1. Logged into your app ('connected')
			// 2. Logged into Facebook, but not your app ('not_authorized')
			// 3. Not logged into Facebook and can't tell if they are logged into
			//    your app or not.
			//
			// These three cases are handled in the callback function.

			FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
			});

		};

		// Load the SDK asynchronously
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

		// Here we run a very simple test of the Graph API after login is
		// successful.  See statusChangeCallback() for when this call is made.
		function checkFBlogin() {
			FB.api('/me', function(response) {
				if(typeof response.name != 'undefined'){
					var userName  = response.name;
					var userEmail = response.email;
					var dataset = {username:""+userName+"",email:""+userEmail+"",pwd:"-1",origin:"fb"};
					getData("http://localhost:1024/hackathon/index.php/userlogin/getUserCredentials",dataset);
					sessionStorage.setItem("username",""+userName+"");
					window.location.replace("<?=base_url()?>index.php/homepage");
				}
			});
		}

		function getData(url,dataset){
		    //var dataObj={name:"Avee",type:"hi"};
		    $.getJSON(''+url+'?results='+JSON.stringify(dataset),  function(data) {

		    });
		}


		$(document).ready(function(){
		});
    </script>
	<style type="text/css">
		html,body{
			padding: 0;
			margin: 0;
			overflow:hidden;
			overflow-x:hidden;
			background: url("../resources/images/main-background.jpg");
			background-size: 100%;
		}
		#main-container{
			width: 1200px;
			height:768px;
			font-family: font-family: 'Ubuntu', sans-serif;
			position: relative;
			margin: 0px auto;
		}

		#login-container{
			width: 400px;
			background: #fff;
			opacity: 0.9;
			margin: 5% auto;
			padding: 20px;
			border : 1px solid #958779;
			border-radius: 4px;
			-webkit-box-shadow: 1px 1px 5px rgba(50, 50, 50, 0.54);
			-moz-box-shadow:    1px 1px 5px rgba(50, 50, 50, 0.54);
			box-shadow:         1px 1px 5px rgba(50, 50, 50, 0.54);
		}

		.login-inputs{
			width: 100%;
			height : 35px;
			margin-bottom: 20px;
			font-size: 20px;
			-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    		-moz-box-sizing: border-box;    /* Firefox, other Gecko */
    		box-sizing: border-box; 
    		padding: 0px 10px;
    		border : 1px solid #958779;
    		border-radius: 4px;
		}

		.login-button{
			width: 100%;
			height: 35px;
			background: #A800A8;
			border: none;
			text-align: center;
			font-size: 20px;
			color: #E6E4E5;
			margin-bottom: 10px;
			-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    		-moz-box-sizing: border-box;    /* Firefox, other Gecko */
    		box-sizing: border-box; 
    		border-radius: 4px;


		}


		.fb-button{
			width: 100%;
			height: 35px;
			background: #46629E;
			border: none;
			text-align: center;
			font-size: 20px;
			color: #E6E4E5;
			-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    		-moz-box-sizing: border-box;    /* Firefox, other Gecko */
    		box-sizing: border-box; 
    		border-radius: 4px;

		}

		#main-title{
			font-family: 'Pinyon Script', cursive;
			font-size: 100px;
			margin: 0px auto;
			width: 100%;
			color: #E6E4E5;
			text-align: center;
			position: relative;
			z-index: 2;
			text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
		}

		.line-seperator{
			top: -80px;
			position: relative;
			width: 50%;
			left: 111px;
			z-index: -2;
		}

	</style>
</head>
<body>
<div id="main-container">

	<div id="main-title">
		Wedding Planner
		<hr class="line-seperator">
	</div>

	<div id="login-container">
		<input type="text" class="login-inputs" placeholder="User name"/>
		<input type="password" class="login-inputs" placeholder="Password"/>
		<button class="login-button">Login</button>
		<button class="fb-button" onclick="checkFBlogin()"><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button></button>
	</div>
</div>
</div>
</body>
</html>