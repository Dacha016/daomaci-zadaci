<?php
$v = 156;
$minV = 3;
$n =40;
$potrebnaKolicinaV = $n*$minV;
if($potrebnaKolicinaV>$v){
    $visakN = ($potrebnaKolicinaV-$v)/$minV;
    echo"<p style='color:red;'>NE</p>";
    echo"<p>Broj osoba koje trebaju napustiti lokal je '$visakN'</p>";
}
else{
    echo"<p style='color:green;'>DA</p>";
}
?>