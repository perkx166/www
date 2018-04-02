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

<?php
session_start();
if (isset($_GET['akcja']) && $_GET['akcja']=='wyloguj'){

unset($_SESSION['zalogowany']);
}

if (isset($_POST['haslo']) && $_POST['haslo']=='admin'){
$_SESSION['zalogowany']=1;
}
if(!isset($_SESSION['zalogowany'])){
?>

<body>
<div class="calo">
<div id="log"><FORM method="POST" action="opinie.php">
	<p>Hasło: <INPUT type="text" name="haslo" size="15"></p>
    <p><INPUT type="submit" value="Log in"></p>
	</FORM></div>


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
	
</div>
</div>
</body>
</html>
<?
}else { 
 include ('opinieadmin.php');
 }?>