
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="style/zadanie3.css" />
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
				<h1>Zadanie 3 jest niżej :)</h1>
                <div class="guziki">
				<a class="a-links" href="#offer"
					><button class="guzikzad">Zadanie 3</button></a
				>
                <a class="a-links" href="/galeriazad3.html">
                    <button class="guzikzad">Galeria</button></a>
                </div>
			</div>
		</header>

		<section id="offer" class="sekcjazadan">
			<p class="dwdk container">Oto zadanie Nr. 3</p>
			<div class="tekstzadania">
            <?php
    $in='Kamil Ptak';
    $tel='737965022';
    $email='ptakkamil5@gmail.com';
    ?>

    <div class="wiz">
        <div class="gwiazdki1">
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        </div>
        <div class="flex">
            <div class="gwiazdki2">
            <img src=gwiaz.png>
            <img src=gwiaz.png>
            <img src=gwiaz.png>
            </div>
            <div class="dane">
            <p><?php echo $in; ?></p>
            <p><?php echo $tel; ?></p>
                   <p><?php echo $email; ?></p> 
            </div>
            <div class="gwiazdki2">
            <img src=gwiaz.png>
            <img src=gwiaz.png>
            <img src=gwiaz.png>
            </div>
        </div>

        <div class="gwiazdki1">
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        <img src=gwiaz.png>
        </div>
        
    </div>
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