<?php
$far = 32;
$cel = ($far-32)*5/9;
$kel = $cel+273.15;
echo $kel;
echo"<br>";
$far = (($kel-273.15)*1.8)+32;
echo$far;
?>