<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php?error=1');
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    	<script
	    src="https://code.jquery.com/jquery-3.2.1.min.js"
	    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	    crossorigin="anonymous"></script>
		<script type="text/javascript">
			
		</script>
		<style type="text/css">
				::selection{
		  background: red;
		  color: white; 
		}
		::-moz-selection{
		  background: red;
		  color: white;
		}
			body{
				/*background-color: black;*/
				background-image: url("img/Wiki-background.jpg");
				color: red;
				font-family:"MrRobot";
			}
			@font-face{
				font-family: "MrRobot";
				src:url("css/MR ROBOT.ttf") format("truetype");
			}
			img:hover{
				border: solid 6px red;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="page-header">
					<h1>Bem vindo</h1>
					<p class="lead">Este e o inicio de uma grande jornada</p>
				</div>
				<div class="col-sm-3">
					<a href=""><img src="img/Angela.jpg" alt="" class="img-responsive thumbnail"></a>
					<h3>Angela</h3>
				</div>
				<div class="col-sm-3">
					<a href=""><img src="img/Elliot.jpg" alt="" class="img-responsive thumbnail"></a>
					<h3>Elliot</h3>
				</div>
				<div class="col-sm-3">
					<a href=""><img src="img/Robot.jpg" alt="" class="img-responsive thumbnail"></a>
					<h3>Mr Robot</h3>
				</div>
				<div class="col-sm-3">
					<a href=""><img src="img/Darlene.jpg" alt="" class="img-responsive thumbnail"></a>
					<h3>Darlene</h3>
				</div>
			</div>
		</div>
	</body>
</html>