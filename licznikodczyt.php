<?php
$fp = fopen("licznik.txt", "r+");
$count = fgets($fp);
echo(" $count ");
?>