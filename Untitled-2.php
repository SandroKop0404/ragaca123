<html>

<head>
	<title>Document</title>
	<style>
		* {
			margin: auto;
		}

		.menu {
			position: fixed;
			width: 100%;
			height: 35px;
			opacity: 1;
			background-color: white;
			z-index: 1000;
		}

		.menu-list {
			height: 100%;
			display: inline-block;
		}

		.foradd {
			margin: 15px;
			display: inline-block;
			color: black;
			font-size: 15px;
			margin-top: 7px;
			font-family: 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
		}

		#menu1 {
			margin-left: 260px;
		}

		#menu2 {
			margin-left: 100;
		}

		#blog {
			z-index: 613;
		}


		.blue {
			color: #1353E8;
		}

		.color {
			width: 290px;
			height: 35px;
			background-color: #1353E8;
			z-index: 5;
			position: absolute;
			top: 0px;
			text-align: right;
			font-size: 25px;
			color: white;
			font-style: bold;

		}

		.grey {
			color: grey;
			text-decoration: none;

		}

		.ragactexti {
			color: red;
			position: absolute;
			top: 260px;
			right: 380px;
			font-family: PTSerif;
			font-size: 30px;
			font-weight: normal;
			font-stretch: normal;
			font-style: normal;
			line-height: 1.25;
			letter-spacing: normal;
			text-align: center;
			color: #ffffff;
			;

		}

		#pic1 {
			top: 108px;
			right: 620px;
			position: absolute;
			width: 100;
			height: 100;
		}

		.div {
			display: inline-block;
			width: 389px;
			height: 290px;
			margin-left: 200px;
			margin-top: 20px;

		}

		.img3 {
			display: block;
			width: 380px;
			height: 200px;
		}

		.span1 {
			font-size: 16px;
			display: block;
		}

		.span2 {
			font-size: 11px;
		}

		.div1 {
			display: inline-block;
			width: 601px;
			height: 290px;
			margin-left: 400px;
			margin-top: 20px;
		}

		.img4 {
			display: block;
			width: 601px;
			height: 200px;
		}

		.img5 {
			display: block;
			width: 190px;
			height: 126px;
		}

		.div2 {
			display: inline-block;
			width: 190px;
			height: 126px;
			margin-left: 400px;
			margin-top: 20px;
		}

		.div3 {
			display: inline-block;
			width: 190px;
			height: 126px;
			margin-left: 20px;
			margin-top: 20px;
		}

		.niko {
			width: 1000px;
			height: 208.5px;
			background-color: #1a54e7;
			margin-top: 30px;
		}

		.span1 {
			color: white;
			font-size: 30px;
			text-align: center;
		}

		.color1 {
			color: white;
			text-align: center;
		}
	</style>
</head>

<body>
	<?php
	$conn = new PDO('mysql:host=64.225.79.16;dbname=kopaliani', 'kopaliani', 'mziuri2020');
	?>


	<nav class="menu">

		<ul class="menu-list" id="menu1">
			<li class="foradd grey">About</li>
			<li class="foradd grey"> Cooperation</li>
			<li class="foradd grey"> Contact</li>
		</ul>

		<ul id="menu2" class="menu-list">
			<a href="#nature"><li class="foradd blue">Nature</li></a>
			<a href="#People"><li class="foradd blue">People</li></a>
			<a href="#Trips"><li class="foradd blue">Trips</li></a>
			<a href="#Animals"><li class="foradd blue">Animals</li></a>
			<a href="#Fashion"><li class="foradd blue">Fashion</li></a>
			<a href="#Tech"><li class="foradd blue">Tech</li></a>

		</ul>
		<div class="color">Blog Template</div>
	</nav>

	<div>

		<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/937B4627-FF01-4674-BE07-95E911D87627.png" alt="Error" style="width: 100%">
	</div>

	<h1 class="ragactexti">Maecenas quis lobortis nunc. Nullam sit
		<br />
		vel odio congue odio congue vulputate a ut nisi</h1>
	<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/D793EEDE-6FA2-4895-B975-83068496D7ED.png" alt="" id="pic1">
	<div class="div">
		<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/54638BD2-67CD-4B51-8B69-464AC1CB4E2C.png" class="img3">
		<span class="span1">donec elementum dui semper, pretium dui quis, pretium nisl.</span>
		<span class="span2">11 september 2016 |</span>
		<a class="span2" href="#JohnDoe">John Doe</a>
	</div>

	<div class="div">
		<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/5AF47E1B-E82D-4BAC-AE62-ADC6B15B468B.png" class="img3">
		<span class="span1">donec elementum dui semper, pretium dui quis, pretium nisl.</span>
		<span class="span2">14 september 2016 |</span>
		<a class="span2" href="#DuiSemper">Dui Semper</a>
	</div>

	<div class="div1">
		<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/EB584EA9-4B30-4B02-BBA5-E55134D6C6FD.png" class="img4">
		<span class="span2">14 september 2016 |</span>
		<a class="span2" href="#DuiSemper">Dui Semper</a>
	</div>

	<div class="div2">
		<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/99C21F73-5EED-42AA-ADE0-99869CEB7EB5.png" class="img5">
		<span class="span1">donec elementum dui semper, pretium dui quis, pretium nisl.</span>
		<span class="span2">14 september 2016 |</span>
		<a class="span2" href="#DuiSemper">Dui Semper</a>
	</div>

	<div class="div3">
		<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/46F2E21D-6ADF-4A5D-9F37-3DF3C4BA1E26.png" class="img5">
		<span class="span1">donec elementum dui semper, pretium dui quis, pretium nisl.</span>
		<span class="span2">14 september 2016 |</span>
		<a class="span2" href="#DuiSemper">Dui Semper</a>
	</div>

	<div class="div3">
		<img src="https://cdn.zeplin.io/5e885c7105ca2e21c637e6fb/assets/58C9BA21-DFC7-4421-9674-908955720A3A.png" class="img5">
		<span class="span1">donec elementum dui semper, pretium dui quis, pretium nisl.</span>
		<span class="span2">14 september 2016 |</span>
		<a class="span2" href="#DuiSemper">Dui Semper</a>
	</div>

	<div class="niko"><span class="span1">Newsletter</span><p class="color1">
Donec elementum dui semper, pretium dui quis, pretium nisl.</p></div>

</body>

</html>