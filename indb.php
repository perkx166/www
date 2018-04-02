<?php
	$nazwa_bazy_danych = "opinie";

	echo "<br> --- Inicjalizacja bazy danych (" .$nazwa_bazy_danych .") : ZACZYNAM --- <br><br>";	

	$link_do_bd = mysql_connect('localhost', 'root', '');
	
	if (!$link_do_bd) {

		die('Nie mo¿na siê po³±czyæ: ' . mysql_error() . "<br>");
	
	} else {

		echo "1) Po³±czono siê baz± danych <br>";	
	
	}

	$sql_zapytanie = 'CREATE DATABASE '.$nazwa_bazy_danych;

	if (mysql_query($sql_zapytanie)) {

		echo "2) Wybrana baza zosta³a pomy¶lnie utworzona<br>";
	
	} else {
	
		echo 'B³±d podczas tworzenia bazy: ' . mysql_error() . "<br>";
	}
	
	mysql_select_db($nazwa_bazy_danych);

	$sql_zapytanie = "CREATE TABLE `tabela1` (
			
			`numer_wpisu` INT UNSIGNED NOT NULL AUTO_INCREMENT, PRIMARY KEY (`numer_wpisu`),
			`opinia` CHAR(250) NOT NULL,
			`podpis` CHAR(40) NOT NULL
		
		  );";
		
	if (mysql_query($sql_zapytanie)) {

		echo "3) Tabela o odpowiednie strukturze zosta³a pomy¶lnie utworzona<br>";
	
	} else {
	
		echo 'B³±d podczas tworzenia tabeli: ' . mysql_error() . "<br>";
	}

	echo "<br> --- Inicjalizacja bazy danych (" . $nazwa_bazy_danych .") : KOÑCZÊ --- <br>";		
	
?>
