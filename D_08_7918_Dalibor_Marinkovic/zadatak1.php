<?php
$v = 30;
$minV = 3;
$n =40;
$potrebnaKolicinaV = $n*$minV;
if($potrebnaKolicinaV>$v){
    $visakN =ceil(($potrebnaKolicinaV-$v)/$minV);
    echo"<p style='color:red;'>NE</p>";
    echo"<p style='color:red;'>'$visakN' osoba treba napustiti lokal!!!</p>";
}
else{
    echo"<p style='color:green;'>DA</p>";
}

?>