﻿<!doctype html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<meta name="Description" content="kontakt do mnie mail przekiero"/>
<meta name="Keywords" content="elektronika,praktyka,strona internetowa"/>
<meta name="Author" content="Jacek Goczkowski PG, AiR, EiA, grupa 1, semestr 2"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="styltematy.css" type="text/css">
<title>Kontakt</title>
</head>
<body>
<div class="calo">
<?php include('tla.php'); ?>
<?php include('podstawa.php'); ?>
<div id="tlotemat">
<div class="podtlo"><h1>Kontakt:</h1>
<div>
<?PHP
	$adresat = 'perk166@gmail.com';
	$email = $_POST['email'];
	$content = $_POST['content'];
	$header = 	"From: perkxmail1@perkx.ct8.pl\nContent-Type:".
			' text/plain;charset="iso-8859-2"'.
			"\nContent-Transfer-Encoding: 8bit";
	if (mail($adresat, "List ze strony głównej. Od: '$email'.", $content, $header))
		echo '<p>Wiadomość wysłana!</p>';
	else 
		echo '<p><b>Nie</b> wysłano maila!</p>';
?>
</div>
<div>
<p>Adresy mailowe gdyby wysyłanie z strony nie zadziałało:</p>
<ul>
<li>comeon55r@gmail.com</li>
<li>perk166@gmail.com</li>
<li>j.goczkowski@gmail.com</li>
<li>samurajwow@gmail.com</li></ul></div>
</div>

</div>
</div>
<p id="licznik">Wejść na strone:
<?php include('licznikodczyt.php'); ?></p>
</body>
</html>