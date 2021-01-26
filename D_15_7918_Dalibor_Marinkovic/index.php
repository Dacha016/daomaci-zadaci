<?php
require_once "autobus.php";
$a1 = new Autobus("LE 058-BI",70);
$a2 = new Autobus("NI 041-SD",62);
$a3 = new Autobus("VR 026-GR",74);
$a4 = new Autobus("BG 1234-JR",80);
$a5 = new Autobus("SD 036-JK",74);
$autobusi = array($a1,$a2,$a3,$a4,$a5);
//ispis svih podataka o svim autobusima
echo"<p><b>Ispis podataka o autobusima:</b></p>";
function ispisPodataka($autobusi){
    foreach($autobusi as $autobus)
    $autobus->stampaj();
} 
ispisPodataka($autobusi);
// maksimalan broj sedista
function ukupnoSedista($autobusi){
    $suma=0;
    foreach($autobusi as $autobus){
        $suma+=$autobus->getSedista();
    }
    return $suma;
}
echo"<b>Ukupno ima: </b>". ukupnoSedista($autobusi)."<b> sedista.</b>";
// autobus sa najvecim brojem sedista
echo"<p><b>Autobus/i sa najvecim brojem sedista je/su:</b></p>";
function maxSedista($autobusi){
    $maxSedista=$autobusi[0]->getSedista();
    $maxAutobus=$autobusi[0];
    if($maxSedista<$autobus->getSedista()){
        $maxSedista=$autobus->getSedista();
        $maxAutobus=$autobus;
    }
    
    return $maxAutobus;

}
maxSedista($autobusi)->stampaj();
//maksimalan broj ljudi u autobusu
function maxLjudi($autobusi,$ljudi){
    $suma=ukupnoSedista($autobusi);
        if($suma>=$ljudi){
            return true;
        }
        else{
            return false;
        }
}
echo maxLjudi($autobusi,250)
?>