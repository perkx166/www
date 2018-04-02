<!doctype html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<meta name="Description" content="Strona g�?ówna z aktualno�?ciami"/>
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
	$opinie     = $_POST['opinia'];
  $podpis = $_POST['podpis'];
 $id= $_POST['id'];

	if (!$opinia || !$podpis) {
  
		echo 'Nie podano wszystkich potrzebnych danych.<br>'
          .'Wróć do poprzedniej strony i spróbuj ponownie.';
  
	} else {

		$link_do_bd = @mysql_connect('localhost', 'root', '');

		if (!$link_do_bd) {

			die('Nie można się połączyć z bazą danych. Spróbuj jeszcze raz później <br>');
	
		}
	

		mysql_select_db('opinie');

		$sql_zapytanie = "INSERT tabela1 (opinia, podpis) VALUES ('$opinia', '$podpis')"; 
  
		$sql_wynik_zapytania = mysql_query($sql_zapytanie);
		if ($sql_wynik_zapytania)

			echo  'Dodano ' . mysql_affected_rows().' opinię. Bardzo dziękuję.'; 		
	}
	
?>
</div>
</div>
</body>
</html>