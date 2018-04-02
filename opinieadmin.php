<!doctype html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<meta name="Description" content="Strona gĹ?Ăłwna z aktualnoĹ?ciami"/>
<meta name="Keywords" content="elektronika,praktyka,strona internetowa"/>
<meta name="Author" content="Jacek Goczkowski PG, AiR, EiA, grupa 1, semestr 2"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="style2.css" type="text/css">
<title>Opinie</title>
</head>
<body>
<div class="calo">
<div id="log"><br>Wyloguj się:<br><input type='button' onclick="location='opinie.php?akcja=wyloguj'" value="Log out"></div>
<?php include('tla.php'); ?>
<?php include('podstawa.php'); ?>
<div id="tlotemat">
<?php
	$link_do_bd = @mysql_connect('localhost', 'root', '');

	if (!$link_do_bd) {
		die('Nie można się połączyć z bazą danych. Spróbuj jeszcze raz później <br>');
	}
	mysql_select_db('opinie');
	
	$sql_zapytanie = "SELECT * FROM tabela1 ORDER BY numer_wpisu ASC"; 
  
	$sql_wynik_zapytania = mysql_query($sql_zapytanie);
  
	while ($wiersz = mysql_fetch_array($sql_wynik_zapytania)) {

	echo "<div><span>" . $wiersz['opinia'] . "<span>" . $wiersz['podpis'] . "</span></span></div>";	

	}
	
	mysql_free_result($sql_wynik_zapytania);
	mysql_close();      
?>
<div id="dodajop">
<?php include('dodawanie.php'); ?>
</div>

<div id="dodajop">
     <h2><b>Usuwanie wpisów </b></h2>

<form action="usunkom.php" method="post">
<p>Podaj nr id <input type='text' name='id' maxlength="3" size="4"><br></p>
<p><input type='submit' value="Usun"></p>
</form>
</div>
 </div>
</div>
</body>
</html>