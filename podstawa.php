<!doctype html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<meta name="Description" content="Strona gſówna z aktualnoſciami"/>
<meta name="Keywords" content="elektronika,praktyka,strona internetowa"/>
<meta name="Author" content="Jacek Goczkowski PG, AiR, EiA, grupa 1, semestr 2"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Strona główna</title>
<script type="text/javascript">
var roz = new Date().getTime()-(<?php echo date(U); ?>*1000);

function zegar(){
miesiace= new Array ('Stycznia', 'Lutego', 'Marca', 'Kwietnia', 'Maja', 'Czerwca', 'Lipca', 'Sierpnia', 'Września', 'Października', 'Listopada', 'Grudnia')
D = new Date();
D.setTime(D.getTime()-roz);
G = D.getHours();
M = D.getMinutes(); M=M<10?'0'+M:M;
S = D.getSeconds(); S=S<10?'0'+S:S;
r = D.getFullYear();
m = miesiace[D.getMonth()];
d = D.getDate();

document.getElementById('czas').innerHTML=' '+ G + ':' + M + ':' + S;
document.getElementById('data').innerHTML=' '+ d + ' ' + m + ' ' + r + ' ' + 'roku'
setTimeout('zegar()', 1000);
}
</script>
</head>

<body>

<div><a href="index.php"><p class="logo">
</p></a>
</div>

<div>
  <ol>
    <li><a href="index.php">STRONA STARTOWA</a>	</li>
    <li><a href="#">MEDIA</a>
		<ul>
        <li><a href="filmy.php">FILMY</a></li>
        <li><a href="zdjecia.php">TAPETY</a></li>
		</ul>
	</li>
    <li><a href="#">O STRONIE I TWÓRCY</a>
		<ul>
        <li><a href="omnie.php">O MNIE</a></li>
        <li><a href="ostronie.php">O STRONIE</a></li>
		</ul>
		</li>
	<li><a href="opinie.php">OPINIE</a></li>
    <li><a href="kontakt.php">KONTAKT</a></li>
  </ol>
</div>

<div id="zegar">
<span>Dziś jest: <span><br><span id="data"></span><br><br>
<span>Godzina: <span><span id="czas"></span>
<script type="text/javascript">zegar()</script>
</div>

<noscript>
Twoja przeglądarka nie obsługuje JavaScriptu.
Aby zobaczyć stronę w pełnej funkcjonalności, zainstaluj inną przeglądarkę:
Internet Explorer, Netscape Navigator, Mozilla, Opera...
</noscript>

</body>
</html>