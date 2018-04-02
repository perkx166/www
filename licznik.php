<?php
$fp = fopen("licznik.txt", "r+");
$count = fgets($fp);
$count = $count + 1;
fseek($fp, 0);
fputs($fp, $count);
fclose($fp);
echo(" $count ");
?>