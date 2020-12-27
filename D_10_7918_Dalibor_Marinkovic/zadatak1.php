<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 10</title>
    <style>
    #jednak{
        text-align:center;
        border:2px orange solid;
        width:100px;
    }
    #manji{
        text-align:center;
        border: 2px blue solid;
        width:100px;
    }
    </style>
</head>
<body>
    <?php
    $n=120;
    $m=$n;
    $sum = 0;
    while($n>0){
        $sum+= $n%10;
        $n =$n/10;
    }
    if($sum==$m){
        echo "<p id='jednak'>Zbir je $sum</p>";
       }
    elseif($sum<$m){
        echo "<p id='manji'>Zbir je $sum</p>";
       }
    ?>
</body>
</html>