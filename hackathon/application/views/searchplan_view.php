<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Wedding-Rings</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<script src="../resources/js/jquery-1.11.0.js"  type="text/javascript"> </script>
    <script src="../resources/js/jquery-ui-1.10.3.min.js"  type="text/javascript"> </script>
    <script type="text/javascript">
		function generateTheSuggestionList(dataArray){
			$(dataArray).each(function(){
				var img = '<img src="'+this.path+'"/>';
				var desc = '<div class="result-description"><span><b>Category :</b> '+this.category+'</span><span><b>Vendor Name :</b> '+this.name+'</span><span><b>Tel :</b> '+this.tele+'</span><span><b>Price :</b> Rs.'+this.price+'/=</span></div>';
				var mainTmplte = '<li class="result">'+img+''+desc+'</li>';
				$("#result-container").append(mainTmplte);
			});
		}

		$(document).ready(function(){
			$("#filter").on("click",function(){
				if($("#search_filter").css("display") == "none"){
					$("#search_filter").fadeIn(200);
				}else{
					$("#search_filter").fadeOut(200);
				}
			});

			$("#datepicker").datepicker();
			$( "#accordion" ).accordion({heightStyle: "content"});
			$("#user-name").html("Welcome "+sessionStorage.getItem("username"));

			var sampleArray = [{path:"../resources/images/cat-flowers.jpg",category:"Florists",name:"George David",tele:"+9471544325",price:"45000"},{path:"../resources/images/cat-photography.jpg",category:"Photography",name:"Aveendra Manoj",tele:"+94715267523",price:"65000"},{path:"../resources/images/cat-bands.jpg",category:"Music Bands",name:"Chathura Sachithra",tele:"+94715267524",price:"85000"},{path:"../resources/images/cat-dressers.jpg",category:"Dressers",name:"Sachitha Suranjith",tele:"+94716767525",price:"78000"}];
			$(".login-button").on("click",function(){
				generateTheSuggestionList(sampleArray);
				$("#accordion").fadeIn(200);
			});
		});
    </script>
	<style type="text/css">
		html,body{
			padding: 0;
			margin: 0;
			background: url(../resources/images/bg-gradient-sand.png) repeat-x 0 0,url(../resources/images/bg-sand.png) repeat 0 0,#F5F1E8;
		}
		#main-container{
			width: 1200px;
			font-family: font-family: 'Ubuntu', sans-serif;
			position: relative;
			margin: 0px auto;
		}

		#login-container{
			width: 400px;
			background: #fff;
			margin: 5% auto;
			padding: 20px;
			border : 1px solid #958779;
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
    		border : none;
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
			margin: 0;
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

		}

		#main-title{
			font-family: 'Pinyon Script', cursive;
			font-size: 35px;
			width: 300px;
			color: #E6E4E5;
			float: left;
			position: relative;
			z-index: 2;
			margin-left: 10px;
			text-shadow: 0 1px 0 rgba(49, 49, 49, 0.75);
		}

		#main-title img{
			width: 60px;
			height: 60px;
			position: absolute;
			z-index: -1;
			left: -35px;
			top: -5px;
		}

		.line-seperator{
			top: -80px;
			position: relative;
			width: 50%;
			left: 111px;
			z-index: -2;
		}

		#dummy-header{
			width: 100%;
			height: 50px;
			background: #9E9F9A;
			position:absolute;
			border-bottom: 1px solid #747474;
		}

		#actual-header{
			width: 100%;
			height: 50px;
			float:left;
		}

		#search_filter{
			width: 400px;
			float: right;
			background: #fff;
			border: 1px solid #747474;
			border-top:none;
			padding: 10px;
			border-bottom-left-radius: 4px;
			border-bottom-right-radius: 4px;
			position: absolute;
			left: 778px;
			top: 52px; 
			z-index: 2;
		}

		#filter{
			width: 50px;
			height: 50px;
			float: right;
			border-left: 1px solid #747474;
			border-right: 1px solid #747474;
			cursor: pointer;
		}

		#filter img{
			width: 35px;
			height: 30px;
			margin: 10px 8px;
		}

		#area-selection{
			width: 100%;
			height: 35px;
			padding: 0px 10px;
			font-size: 20px;
			border-radius: 4px;
			border: 1px solid #747474;
			color: #B1B1B0;
		}

		#search_results{
			width: 940px;
			float: left;
			margin-bottom: 
		}

		#result-container{
			margin: 0;
			padding: 12px 12px 12px 0px;
			width: 100%;
			list-style: none;
		}

		#result-container li{
			width: 285px;
			height: 280px;
			margin-top: 12px;
			margin-left: 12px;
			padding: 7px;
			float: left;
			background: #fff;
			border-radius: 4px;
			-webkit-box-shadow: 1px 1px 5px rgba(50, 50, 50, 0.54);
			-moz-box-shadow:    1px 1px 5px rgba(50, 50, 50, 0.54);
			box-shadow:         1px 1px 5px rgba(50, 50, 50, 0.54);

		}

		.result-description{
			width: 100%;
			height: 80px;
			float: left;
			padding-top: 7px;
			text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
		}

		.result-description span{
			display: block;
			font-family:'Ubuntu', sans-serif;
			font-size: 12px;
			padding: 2px 0px;
			line-height: 12px;
			color: #747474;
		}

		.result img{
			width: 100%;
			height: 200px;
			float: left;
		}

		#suggestion_list{
			float: right;
			width: 250px;
			margin-top: 21px;
		}

		#suggestion_ul{
			margin: 0;
			padding: 0;
			list-style: none;
			width: 100%;
		}

		.suggestions{
			width: 100%;
			height: 100px;
			float: left;
			background: #fff;
		}

		.ui-accordion .ui-accordion-header{
			background: #ffffff;
			border : 1px solid #958779;
		}

		.ui-accordion .ui-accordion-header{
			font-size: 15px !important;
		}

		.ui-widget-content a {
			font-size: 12px;
			text-decoration: normal;
			width: 100%;
			text-decoration: none;
			display: block;
		}

		#user-name{
			float: right;
			font-family:'Ubuntu', sans-serif;
			font-size: 16px;
			line-height: 3;
			padding: 0px 25px;
			height: 50px;
			color: #E6E4E5;
			text-shadow: 0 1px 0 rgba(49, 49, 49, 0.75);
		}

	</style>
</head>
<body>
<div id="dummy-header"></div>
<div id="main-container">
	<div id="actual-header">
		<div id="main-title"><img src="../resources/images/rings.png">Wedding Planner</div>
		<div id="filter">
			<img src="../resources/images/filter-ico.png">
		</div>
		<div id="user-name"></div>
	</div>
	<div id="search_filter">
		<input type="number" class="login-inputs" placeholder="Enter your budget"/>
		<select id="area-selection">
			<option>Colombo</option>
			<option>Kurunegala</option>
			<option>Galle</option>
			<option>Kandy</option>
			<option>Negombo</option>
		</select>
		<input id="datepicker" type="text"  style="margin-top:20px;" class="login-inputs" placeholder="Enter your wedding date"/>
		<button class="login-button">Find</button>
	</div>

	<div id="search_results">
		<ul id="result-container"></ul>
	</div>
	<div id="suggestion_list">
		<div id="accordion" style="display:none;">
  			<h3>Section 3</h3>
  			<div>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  			</div>
  			<h3>Section 3</h3>
  			<div>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  			</div>
  			<h3>Section 3</h3>
  			<div>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  				<a href="#_">Studio 3000</a>
  			</div>

  
	</div>
</div>
</div>
</body>
</html>