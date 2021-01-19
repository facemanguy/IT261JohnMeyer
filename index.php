<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">

	<title>John Meyer Portal</title>
	<meta name="description" content="John Meyer Portal">
	<meta name="author" content="John Meyer">
	<link rel="stylesheet" href="css/portal.css">
	<link rel="stylesheet" href="css/nav.css">
</head>

<body>
	<header>
		<h1>John Meyer's IT261 Portal</h1>
		<nav class="topnav" id="Topnav">
			<a href="index.php" class="active">Home</a>
			<a href="index.php">Assignments</a>
			<a href="index.php">Classwork</a>
			<a href="contact.php">Contact</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
		</nav>
	</header>

	<div class="wrapper">
		<aside id="portrait">
			<img class="desktop" src="images/JohnMeyer.jpg" alt="Photo of John Meyer" />
		</aside>
		<h2 class="subheader">About me</h2>

		<p>Hello! I'm John Meyer, an aspiring web development student working towards my degree. This is my portal page for my IT 261 Web App programming course at Seattle Central College. In here you'll find several pages I've worked on in PHP as part of my coursework. Enjoy!</p>
		<p>I always knew I wanted to program since I was little. Of course I wanted to work on games for the longest time. I took a high school game programming course that threw me right into the deep end; My first language was C++! I switched my focus from game development to Web development in 2018 as it seemed the more reasonable option. Around the same time I landed into Seattle University's Web development certificate program. Now I'm looking to capitalize that into a degree at SCC hopefully landing a job in the field shortly after graduating.</p>
		<p>I have an eclectic set of hobbies from the super nerdy to incredibly sporty. I paint miniatures, play role playing games, ride motorcycles, and am an excellent snowboarder. I spent a season as a snowboard instructor a few years back so in case you ever wanted to learn I can help you out! I can play bass guitar and have been to germany. There's a lot more about me if you ever want to chat.</p>

		<div class="centered">
			<h3>My local MAMP Setup</h2>
			<img src="images/MAMP.JPG" alt="Local Mamp page">
		</div>
		
		<div class="centered">
			<h3>The PHP error for HW1</h3>
			<img src="images/phpError.JPG" alt="My PHP error for HW1">
		</div>
		<footer>
			<p><small>&copy; 2021 by <a href="contact.php">John Meyer</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
		</footer>
	</div>

	<!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
	<script>
		function myFunction() {
			var x = document.getElementById("Topnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
</body>

</html>