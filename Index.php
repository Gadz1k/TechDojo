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
		<main id="mainIndex">
			<section id="mainIntroducion">
				<h2><span class="blue">Tech</span>Dojo</h2>
				<br />
				<p>
					Znajdź kursy, poradniki lub dodaj własne źródła nauki dla twoich
					ulubionych języków programowania
				</p>
			</section>
			<section id="tutorialListMain">
				<article>
					<img class="tutorialImage" src="res/Full-Js-Course.jpg" alt="cos" />
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena: 3.6</p>
				</article>
				<article>
					<img
						class="tutorialImage"
						src="https://m.natemat.pl/7fdf017713362f1b23ccc25b660450be,0,0,0,0.jpg"
						alt="cos"
					/>
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena: 2.7</p>
				</article>
				<article>
					<img
						class="tutorialImage"
						src="https://m.natemat.pl/7fdf017713362f1b23ccc25b660450be,0,0,0,0.jpg"
						alt="cos"
					/>
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena: 4.5</p>
				</article>
				<article>
					<img
						class="tutorialImage"
						src="https://m.natemat.pl/7fdf017713362f1b23ccc25b660450be,0,0,0,0.jpg"
						alt="cos"
					/>
					<p class="creator">freeCodeCamp.org</p>
					<p class="tutorialName">JavaScript Programming - Full Course</p>
					<p class="rating">Ocena: 2.1</p>
				</article>
			</section>
		</main>
		<section id="info">
			<div class="sekcja">
				<span class="iconify" data-icon="el:search-alt"></span>
				<br />
				<h2>Wyszukuj potrzebne kursy i poradniki</h2>
				<br />
				<p>
					Znajdź kursy i poradniki, dla swoich ulubionych języków programowanie.
				</p>
			</div>
			<div class="sekcja">
				<span class="iconify" data-icon="zondicons:explore"></span>
				<br />
				<h2>Odkrywaj codziennie nowe kursy</h2>
				<br />
				<p>
					Dzięki szerokiemu asertymentowi na naszej stronie możesz codziennie
					znaleźć coś nowego dla siebie.
				</p>
			</div>
		</section>
		<footer>
			<p>
				Masz pytania? Zajrzyj do naszego centrum pomocy
				<a href="Support.html">TechDojo</a>
			</p>
		</footer>
		<script src="home.js"></script>
	</body>
</html>
