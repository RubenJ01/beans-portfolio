<?php
/*
Jungbin's art portofolio website.
This is the home page.
@author Ruben Eekhof
*/
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Beans website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="container w-75">
		<div id="header" class="row horizontal">
			<span>&#x2661;</span> <span>Jungbin's</span> &nbsp;<span>Art</span>&nbsp;<span>Portfolio</span> &#x2661;
		</div>
		
		<div class="row vertical">
			<div class="separator">&#x2661;</div>
		</div>

		<div class="navbar row horizontal">
			<ul class="nav">
				<li class="nav-item"><a href="index.php">HOME</a></li>
				<li class="nav-item"><a href="aboutme.php">ABOUT ME</a></li>
				<li class="nav-item"><a href="">OTHER ART</a></li>
				<li class="nav-item"><a href="">DIGITAL ART</a></li>
				<li class="nav-item"><a href="">FAQ</a></li>
			</ul>
		</div>
	</div>

	<div class="container w-95">
		<div class="row horizontal">
			<div class="sidebar row vertical">
				<div class="row vertical">
					<div class="profilepicture">
						<img src="art/profilepicture.jpg">
					</div>
					<div class="status">
						<textarea readonly>CURRENT THOUGHTS AND STATUS</textarea>
					</div>
				</div>
				<div class="fav_songs row vertical">
					<h3>FAVOURITE SONGS</h3>
					<iframe src="https://open.spotify.com/embed/playlist/6Bk4iUyRdMNkWlukwGq1TM" height="380"
						frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
				</div>
			</div>
			<!--<div class="main-section">
				<div class="hexagons">
					<div class="hexagon-gallery">
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
						<div class="hex"><img src="art/namijhinfinal.jpg"></div>
					</div>
				</div>
			</div>-->
		</div>
	</div>