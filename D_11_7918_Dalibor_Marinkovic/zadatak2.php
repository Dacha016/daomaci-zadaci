<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    <?php
    // for petlja
    $n = 1;
    $m =15;
    $sum = 0;
    
    for($i=$n;$i<=$m;$i++){
        if($i%2!=0){
            $sum+=$i**3;
        }
    }
    echo "<p>Zbir kubova neparnih brojeva od $n do $m je $sum</p>";
    // while
    $n = 1;
    $m =15;
    $i=0;
    $sum = 0;
    
    while($i<=$m){
        if($i%2!=0){
            $sum+=$i**3;
        }
        $i++;
    }
    echo "<p>Zbir kubova neparnih brojeva od $n do $m je $sum</p>";
    ?>
</body>
</html>