<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 11</title>
</head>
<body>
    <?php
    //resenje preko while 
    $n= 5;
    $m = 10;
    $i = $n;
    $proizvod = 1;
    $sum = 0;
    $razlika =0;
    while($i<=$m){
        if($i%7==0 && $i%3!=0){
            $proizvod*=$i;
        }
        elseif($i%3==0 && $i%7!=0){
            $sum+=$i;
        }
        $i++;
    }
    $razlika= $proizvod-$sum;
    echo "<p>Razlika proizvoda brojeva od $n do $m koji su deljivi sa 7 a nisu s 3 i zbira brojeva od $n do $m koji su deljivi sa 3 a nisu sa 7 je $razlika.</p>";
    // resenje preko for petlje
    $n= 5;
    $m = 10;
    $proizvod = 1;
    $sum = 0;
    $razlika = 0;
    for($i=$n;$i<=$m;$i++){
        if($i%7 == 0 && $i%3!=0){
            $proizvod*=$i;
        }
        elseif($i%3==0 && $i%7!=0){
            $sum+=$i;
        }
    }
    $razlika=$proizvod-$sum;
    echo "<p>Razlika proizvoda brojeva od $n do $m koji su deljivi sa 7 a nisu s 3 i zbira brojeva od $n do $m koji su deljivi sa 3 a nisu sa 7 je $razlika.</p>";
    ?>
</body>
</html>