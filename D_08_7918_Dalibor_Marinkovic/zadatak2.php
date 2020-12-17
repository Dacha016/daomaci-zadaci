<?php
$trenutnaGodina = date("Y");
$datumRodjenja = 1985;
$brojGodina = $trenutnaGodina - $datumRodjenja;
if($brojGodina > 18){
    echo"<p>Osoba je punoletna!!!</p>";
}
else{
    echo"<p>Osoba je maloletna!!!</p>";
}
?>