<html>

<head>
	<title>Document</title>
	<style>
		* {
			margin: auto;
		}

		.h3 {
			background-color: blue;
			color: white;
			height: 35px;
			width: 290px;
		}

		ul {
			list-style: none;
			margin: 0px;
			padding: 0px;
			color: white;

		}

		ul li {
			float: left;
			height: 25px
		}

		li {
			list-style: none;
			margin-right: 3px;
			padding: 0px;
			color: white;
			float: right;
			font-weight: normal;
			width: auto;
			height: auto;
			font-size: 12px;
			font-weight: bold;
			font-style: normal;
			text-align: center;
			color: #ffffff;
			margin-top: 8px;
		}

		div {
			width: 200px;
			height: 20px;
			float: left;
			margin-right: 0px;
		}

		body {
			background: url(https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/937B4627-FF01-4674-BE07-95E911D87627.png) no-repeat;
			background-size: cover;
			font-family: Arial;
		}

		.button1 {
			width: 35px;
			height: 35px;
			background-color: #f6f6f6;
		}

		a {
			color: grey;
			text-decoration: none;

		}

		.sxva {
			background-color: white;
			color: grey;
			width: 600px;
			height: 35px;
		}

		.tema {
			margin-right: 0px;
		}

		.axali {
			float: right;
			margin-right:20px;
			margin-left: 20px;
		}

	</style>
</head>

<body>
	<?php
	$conn = new PDO('mysql:host=64.225.79.16;dbname=kopaliani', 'kopaliani', 'mziuri2020');
	?>

	<nav>

		<div class="h3">
			<li>
				<h3>Blog Template</h3>
			</li>
		</div>
		<div class="sxva">
		<div class="button1"><img src="https://img.icons8.com/ios/500/search--v1.png" alt="Error" class="button1"></div>
		<ul>
			<li>
				<a href="#About"><h3>About</h3></a>
			<li>
			<li>
				<a href="#Cooperation"><h3>Cooperation</h3></a>
			<li>
			<li class="tema"> 
				<a href="#Contact"><h3>Contact</h3></a>
			<li>
		</ul>
		<ul class="axali">
			<li><a href="#Nature">Nature</a></li>
			<li><a href="#People">People</a></li>
			<li><a href="#Trip">Trip</a></li>
			<li><a href="#Fashion">Fashion</a></li>
			<li><a href="#Tech">Tech</a></li>
		</ul>
		</div>

	</nav>

</body>

</html>
