<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="Style.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
			rel="stylesheet"
		/>
		<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
		<title>TechDojo</title>
	</head>

	<body>
		<nav>
			<a href="Index.php">
				<p id="logo"><span class="blue">T</span>D</p>
			</a>
			<ul>
				<li><a href="Index.php">Główna</a></li>
				<li><a href="Lista.php">Twoja Lista</a></li>
				<li><a href="Biblioteka.php">Biblioteka</a></li>
				<li><a href="Dodaj.php">Dodaj</a></li>
			</ul>
			<section id="loginBox">
			<a href="Logowanie.php"><button id="login">Zaloguj się</button></a>
			</section>
		</nav>
		<main class="main">
			<section id="mainIntroducion">
				<h2>Biblioteka</h2>
				<br />
				<p>
					Tu odkryjesz kursy oraz poradniki z twoich ulubionych języków
					programowania
				</p>
			</section>
			<section id="tutorialCategories">
				<ul id="categoriesMenu">
					<li>C#</a></li>
					<li>Python</li>
					<li>Java</li>
					<li>JavaScript</li>
					<li>PHP</li>
					<li>HTML&CSS</li>
				</ul>
			</section>
			<section id="tutorialListMain">
				<article>
					<img class="tutorialImage" src="res/Full-Js-Course.jpg" alt="cos" />
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena Gwiazdki</p>
				</article>
				<article>
					<img
						class="tutorialImage"
						src="https://m.natemat.pl/7fdf017713362f1b23ccc25b660450be,0,0,0,0.jpg"
						alt="cos"
					/>
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena Gwiazdki</p>
				</article>
				<article>
					<img
						class="tutorialImage"
						src="https://m.natemat.pl/7fdf017713362f1b23ccc25b660450be,0,0,0,0.jpg"
						alt="cos"
					/>
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena Gwiazdki</p>
				</article>
				<article>
					<img
						class="tutorialImage"
						src="https://m.natemat.pl/7fdf017713362f1b23ccc25b660450be,0,0,0,0.jpg"
						alt="cos"
					/>
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena Gwiazdki</p>
				</article>
			</section>
		</main>
		<footer>
			<p>
				Masz pytania? Zajrzyj do naszego centrum pomocy
				<a href="Support.html">TechDojo</a>
			</p>
		</footer>
		<script src="home.js"></script>
	</body>
</html>

