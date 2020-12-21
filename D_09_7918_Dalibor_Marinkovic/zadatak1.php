<?php
$sati= date("H");
$dan = date("w");
if(($dan==0 || $dan==6) && ($sati<10 || $sati>=18)){
    echo"<p>Butik je trenutno zatvoren</p>";
}
elseif(($dan>0 || $dan<6) && ($sati <9 || $sati>=20)){
    echo"<p>Butik je trenotno zatvoren</p>";
}
else{
    echo"<p>Butik je otvoren</p>";
}
?>