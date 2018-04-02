<!doctype html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<meta name="Description" content="usuwanie opini"/>
<meta name="Keywords" content="elektronika,praktyka,strona internetowa"/>
<meta name="Author" content="Jacek Goczkowski PG, AiR, EiA, grupa 1, semestr 2"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<title>Opinie</title>
</head>
<body>
<div class="calo">
<?php include('tla.php'); ?>
<?php include('podstawa.php'); ?>
<div id="tlotemat">
<?php
	
{

 $id= $_POST['id'];


		$link_do_bd = @mysql_connect('mysql.ct8.pl', 'perkx_baza1', 'Wtf55r12#');

	
		mysql_select_db('perkx_opinie');
	  
	
			
			
		$zapytanie = "DELETE FROM `tabela1` WHERE `numer_wpisu`='$id'";
		$idzapytania = mysql_query($zapytanie);
		
		if ($idzapytania)
			echo  'usunięto ' . mysql_affected_rows().' opinii'; 
	}
	?>
</div>
</div>
<p id="licznik">Wejść na strone:
<?php include('licznikodczyt.php'); ?></p>
</body>
</html>