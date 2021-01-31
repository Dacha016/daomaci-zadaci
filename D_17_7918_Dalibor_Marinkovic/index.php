<?php
require_once "samofinansiranje.php";
require_once "budzet.php";
$s1 = new BudzetskiStudent("Marko",55,9);
$s2 = new SamofinansirajuciStudent("Milos",180,10);
$s3 = new BudzetskiStudent("Stefana",95,8);
$s4 = new SamofinansirajuciStudent("Lazar",55,9);
$s5 = new BudzetskiStudent("Ana",240,10);
$s6 = new SamofinansirajuciStudent("Lara",55,7);
$studenti = array($s1,$s2,$s3,$s4,$s5,$s6);
for($i=0;$i<count($studenti);$i++){
    $studenti[$i]->stampaj();
    echo"<hr>";
}
echo"<h3>Student koji placa maksimalu skolarinu je:</h3>";
function maxSkolarina($studenti){
    foreach($studenti as $student){
        $maxSkolarina=$student->skolarina(rand(35,60));
        $maxStudent = $student;
        break;
    }
    foreach($studenti as $student){
        $skolarina=$student->skolarina(rand(35,60));
        if($maxSkolarina<$skolarina){
            $maxSkolarina=$skolarina;
            $maxStudent=$student;
        }
    }
   return $maxStudent;
}
$max=maxSkolarina($studenti)->stampaj();
echo"<hr>";

function prosecnaSkolarina($studenti){
    $suma=0;
    foreach($studenti as $student){
        $suma+=$student->skolarina(rand(35,60));
    }
    return $prosecnaSkolarina=$suma/count($studenti);
}
$p=prosecnaSkolarina($studenti);
echo"<h3>Prosecna skolarnina koju studenti placaju je: $p</h3>";
echo"<hr>";
function odnos($studenti){
    $sumaSkolarine=0;
    $sumaBodova=0;
    foreach($studenti as $student){
        $suma=$student->skolarina(rand(35,60));
        $bodovi=$student->getOsvojeniESPB();
        $prosecanPojedinacniOdnos=round($suma/$bodovi);
        $sumaSkolarine+=$prosecanPojedinacniOdnos;
    }
    return $prosecanOdnos=round($sumaSkolarine/count($studenti));
}
$p= odnos($studenti);
echo"<h3>Prosecan odnos ESPB-a i skolarine je: 1 : $p</h3>";
echo"<hr>";
echo"<h3>Student sa minimalnim ESPB-om</h3>";
function minESPB($studenti){
    foreach($studenti as $student){
        $minESPB=$student->getOsvojeniESPB();
        $minStudent=$student;
        break;
    }
    foreach($studenti as $student){
        if($minESPB>$student->getOsvojeniESPB()){
            $minESPB=$student->getOsvojeniESPB();
            $minStudent=$student;
        }
    }
    foreach($studenti as $student){
        if($minESPB==$student->getOsvojeniESPB() && $minStudent->skolarina(rand(35,60))<$student->skolarina(rand(35,60))){
            $minStudent = $student;
        }
    }
    return $minStudent;
}
minESPB($studenti)->stampaj();
?>