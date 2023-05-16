
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="style/zadanie5.css" />
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
				<h1>Zadanie 5 jest niżej :)</h1>
				<div class="guziki">
				<a class="a-links" href="#offer"
					><button class="guzikzad">Zadanie 5</button></a
				>
                <a class="a-links" href="/galeriazad5.html">
                    <button class="guzikzad">Galeria</button></a>
                </div>
			</div>
		</header>

		<section id="offer" class="sekcjazadan">
			<p class="dwdk container">Oto zadanie Nr. 5</p>
			<?php
$liczba1=6;
$liczba2=2;

$suma=$liczba1+$liczba2;
$roznica=$liczba1-$liczba2;
$iloczyn=$liczba1*$liczba2;
$iloraz=$liczba1/$liczba2;
?>
<h2 class="napis">Działania na liczbach <?php echo $liczba1,' oraz ',$liczba2;?></h2>
<div class="tabela">
<table>
  <tr>
    <th>Suma</th>
    <th>Różnica</th>
    <th>Iloczyn</th>
    <th>Iloraz</th>
</tr>
  <tr>
    <td><?php echo $suma;?></td>
    <td><?php echo $roznica;?></td>
    <td><?php echo $iloczyn;?></td>
    <td><?php echo $iloraz;?></td>
  </tr>
</table>
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