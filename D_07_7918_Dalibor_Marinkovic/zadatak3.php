<?php
$p = 2000;
$m = 5000;
$k = 4000;
$cenaDzempera = (($p+$m)-$k)/2;
$peraK = $p - $cenaDzempera;
$mikaK = $m - $cenaDzempera;
echo "Kusur koji treba da dobije Pera je ".$peraK." dinara";
echo "<br>";
echo "Kusur koji treba da dobije Mika je ".$mikaK." dinara";
?>