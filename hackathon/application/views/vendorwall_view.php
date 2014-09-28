<html>
<head>
	<title>Wedding-Rings</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<script src="../resources/js/jquery-1.11.0.js"  type="text/javascript"> </script>
    <script src="../resources/js/jquery-ui-1.10.3.min.js"  type="text/javascript"> </script>
</head>

<script type="text/javascript"></script>
<style type="text/css">
	html,body{
		padding: 0;
		margin: 0;
		background: url(../resources/images/bg-gradient-sand.png) repeat-x 0 0,url(../resources/images/bg-sand.png) repeat 0 0,#F5F1E8;
	}

	#main-container{
		width: 1200px;
		font-family: 'Ubuntu', sans-serif;
		position: relative;
		margin: 0px auto;
	}

	#content_wrapper{
		width:100%;
		height: 100%;
		float: left;
		position: relative;
		overflow-x:hidden; 
		
	}

	#main_menu_conatiner{
		width: 100%;
		height: 50px;
		position: fixed;
		top: 0px;
		left: 0px;
		background: #333;
		z-index: 100;
		-webkit-box-shadow: 0px 3x 1px 0px rgba(0,0,0,0.81);
		-moz-box-shadow: 0px 3px 1px 0px rgba(0,0,0,0.81);
		box-shadow: 0px 3px 1px 0px rgba(0,0,0,0.81);
	}

	#middle_content_container{
		margin: 50px 0;
		float: left;
		width: 100%;
		z-index: 90;
	}

	#middle_content{
		width: 1200px;
		margin: 0px auto;
	}

	#footer{
		width: 100%;
		float: left;
		background: #333;
		-webkit-box-shadow: 0px -2px 1px 0px rgba(0,0,0,0.81);
		-moz-box-shadow: 0px -2px 1px 0px rgba(0,0,0,0.81);
		box-shadow: 0px -2px 1px 0px rgba(0,0,0,0.81);
		text-align: center;
		padding: 5px;
		color: #fff;
		font-size: 12px;
	}

	#cardfan, #cardfan img { width: 370px; height: 250px; z-index: 10}
	#cardfan { margin:20px 15px 50px ;float: left;cursor: pointer; }
	#cardfan img { 
		border: 5px solid #ffe;
		-webkit-box-shadow: 1px 1px 5px rgba(50, 50, 50, 0.54);
		-moz-box-shadow:    1px 1px 5px rgba(50, 50, 50, 0.54);
		box-shadow:         1px 1px 5px rgba(50, 50, 50, 0.54);
		position: absolute; 
		-webkit-transition: 1s all;
		-webkit-transform-origin: center 10px;
	}

	#cardfan:hover img:first-child {
		-webkit-transform: rotate(5deg);
		-webkit-transition: 1s all
	}
	#cardfan:hover img:last-child {
		-webkit-transform: rotate(-5deg);
		-webkit-transition: 1s all
	}

	.category_header{
		width: 100%;
		text-align: center;
		font-size: 18px;
		padding: 5px 5px;
		color: #484848;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
		background: #fff;
		position: relative;
		height: 30px;
	}

	.category_header span:nth-child(1){
		position: absolute;
		left: 10px; 
		line-height: 30px;
	}

	.category_header span:nth-child(2){
		position: absolute;
		right: 10px;
		font-size: 12px;
		line-height: 30px;
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

	#vendor-details{
		width: 100%;
		padding: 10px;
		float: left;
		background: #ffffff;
		margin-top: 12px;
		-webkit-box-shadow: 1px 1px 5px rgba(50, 50, 50, 0.54);
		-moz-box-shadow:    1px 1px 5px rgba(50, 50, 50, 0.54);
		box-shadow:         1px 1px 5px rgba(50, 50, 50, 0.54);
		box-sizing: border-box;
	}

	#vendor-details img{
		width: 200px;
		height: 200px;
		margin-right: 10px;
		float: left;
	}

	#vendor-details h2{
		margin: 0;
		font-size: 20px;
		font-family: 'Ubuntu', sans-serif;;
	}

	.line_separator{
		width: 100%;
		height: 1px;
		margin: 40px 0;
		background: #CECECE;
		
	}

</style>

<body>
	<div id="dummy-header"></div>
		<div id="main-container">

			<div id="actual-header">
				<div id="main-title"><img src="../resources/images/rings.png">Wedding Planner</div>
			</div>

			<div id="vendor-details">
				<img src="../resources/images/cat-photography.jpg">
				<h2>City Studio photographers</h2> 
				<p>	
					Because Niépce's camera photographs required an extremely long exposure (at least eight hours and probably several days), he sought to greatly improve his bitumen process or replace it with one that was more practical. Working in partnership with Louis Daguerre, he discovered a somewhat more sensitive process that produced visually superior results, but it still required a few hours of exposure in the camera. Niépce died in 1833 and Daguerre then redirected the experiments toward the light-sensitive silver halides, which Niépce had abandoned many years earlier because of his inability to make the images he captured with them light-fast and permanent. Daguerre's efforts culminated in what would later be named the daguerreotype process.
				</p>
			</div>

			<div id="middle_content">	
				<a id='cardfan'>
					<div class="category_header"><span>Album 01</span><span> 4 pics</span></div>
					<img src="../resources/images/wedding-a.jpg" alt="A photograph of a bicycle parked on Italian street">
					<img src="../resources/images/wedding-b.jpg" alt="A photograph of bridge in Florence, Italy">
				</a>
				<a id='cardfan'>
					<div class="category_header"><span>Album 02</span><span> 4 pics</span></div>
					<img src="../resources/images/wedding-b.jpg" alt="A photograph of a bicycle parked on Italian street">
					<img src="../resources/images/wedding-a.jpg" alt="A photograph of bridge in Florence, Italy">
				</a>
				<a id='cardfan'>
					<div class="category_header"><span>Album 03</span><span> 4 pics</span></div>
					<img src="../resources/images/wedding-c.jpg" alt="A photograph of a bicycle parked on Italian street">
					<img src="../resources/images/wedding-c.jpg" alt="A photograph of bridge in Florence, Italy">
				</a>

				<a id='cardfan'>
					<div class="category_header"><span>Album 04</span><span> 4 pics</span></div>
					<img src="../resources/images/wedding-d.jpg" alt="A photograph of a bicycle parked on Italian street">
					<img src="../resources/images/wedding-d.jpg" alt="A photograph of bridge in Florence, Italy">
				</a>
			</div>


		</div>	
</body>
</html>
