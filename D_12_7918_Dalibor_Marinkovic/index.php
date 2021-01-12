<?php
function digitron($br1,$br2,$operator){
    if($operator == "+"){
        $zbir = $br1+$br2;
        return $zbir;
    }
    elseif($operator == "-"){
        $razlika = $br1-$br2;
        return $razlika;
    }
    elseif($operator == "*"){
        $proizvod = $br1*$br2;
        return $proizvod;
    }
    elseif($operator == "/"){
        $kolicnik = $br1/$br2;
        return $kolicnik;
    }
}
$br1=3;
$br2=2;
$operator="/";
echo"<p>$br1 $operator $br2 = ";
echo digitron($br1,$br2,$operator);
echo"</p>";
?>