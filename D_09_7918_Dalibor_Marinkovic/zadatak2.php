<?php
$populacija = 7000000; 
$brTestiranih = 23000;
$brPozitivnih = 5800;
$procenatPozitivnihUDanu =$brPozitivnih/($brTestiranih/100);
$procenatPozitivnih = $brPozitivnih/($populacija/100);
if($procenatPozitivnihUDanu>30 || $procenatPozitivnih>10){
    echo"<p style=color:red>VANREDNO STANJE</p>";
}
?>