<?php
function digitron($br1,$br2,$operator){
    if($operator == "+"){
        $zbir = $br1+$br2;
        echo"<p>$br1 $operator $br2 = $zbir</p>";
    }
    elseif($operator == "-"){
        $razlika = $br1-$br2;
        echo"<p>$br1 $operator $br2 = $razlika</p>";
    }
    elseif($operator == "*"){
        $proizvod = $br1*$br2;
        echo"<p>$br1 $operator $br2 = $proizvod</p>";
    }
    elseif($operator == "/"){
        $kolicnik = $br1/$br2;
        echo"<p>$br1 $operator $br2 = $kolicnik</p>";
    }
}
digitron(5,6,"*");
?>