<?php
$image=array('tlo1.jpg','tlo2.jpg','tlo3.jpg','tlo4.jpg','tlo5.jpg','tlo6.jpg','tlo7.jpg','tlo8.jpg');
$key=rand(0,count($image)-1);
$obrazek=$image[$key];
echo "<body style=\"background-image:url($obrazek);\">";
?>