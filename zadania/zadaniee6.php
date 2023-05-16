<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="zadanie6.css" />
		<title>Strona Kamila</title>
	</head>
	<body>
		<nav class="nav-items">
			<div class="navi container">
			<a class="a-links" href="/index.html"><p class="imie">Kamil Ptak</p></a>
				<ul class="nav-links">
					<li><a class="a-links" href="kontakt.html">Kontakt</a></li>
				</ul>
			</div>
		</nav>

		<header class="zdjecietlo">
			<div class="nazdj container">
				<h1>Zadanie 6 jest niżej :)</h1>
				<div class="guziki">
				<a class="a-links" href="#offer"
					><button class="guzikzad">Zadanie 6</button></a
				>
                <a class="a-links" href="/galeriazad6.html">
                    <button class="guzikzad">Galeria</button></a>
                </div>
			</div>
		</header>

		<section id="offer" class="sekcjazadan">
			<p class="dwdk container">Oto zadanie Nr. 6</p>
      <h2 class='napis'>Sprawdź pierwiastek z dowolnej liczby!</h2>
  <?php
$pole = $_GET['pole'];
?>
<div class="form">
<form method="get">
<input name="pole" value="" />
<input type="submit" value="Sprawdź"/>
</form>
</div>
<div class="wynik">
<?php
  if (is_numeric($pole)) {
    if ($pole>0){
    $wynik=sqrt($pole);
    echo 'Wynik to: ',$wynik;
    }
    else{
      echo "Nie ma pierwiastków z liczb ujemnych!";
    }

  }
  else{
    echo 'Proszę wpisać liczbę!';
  }
?>
</div>
			</div>
		</section>

		<footer class="footer">
			<div class="container tcf">
				<p>Kamil Ptak, 2023</p>
			</div>
		</footer>
	</body>
</html>