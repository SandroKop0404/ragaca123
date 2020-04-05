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

		}

		div {
			width: 200px;
			height: 20px;
			float: left;
			margin-right: 20px;
		}

		body {
			background: url(https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/937B4627-FF01-4674-BE07-95E911D87627.png) no-repeat;
			background-size: cover;
			font-family: Arial;
		}

		.button1 {
			width: 25px;
			height: 24.5px;
			background-color: #f6f6f6;
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
		<ul>
			<li>
				<h3>About</h3>
			<li>
			<li>
				<h3>Cooperation</h3>
			<li>
			<li>
				<h3>Contact</h3>
			<li>
		</ul>
		<div class="butto1"><a href="www.google.com"><img src="https://img.icons8.com/ios/500/search--v1.png" alt="Error" class="button1"></a></div>

	</nav>

</body>

</html>
