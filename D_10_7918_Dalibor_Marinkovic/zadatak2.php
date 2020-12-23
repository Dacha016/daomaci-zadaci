<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 10</title>
</head>
<body>
    <?php
    $n = 99;
    $i = 1;
    $k = 0;
    while($i <= $n){
        if($n % $i == 0 && $i % 3 == 0 && $i % 2 == 1)
        {
            $k++;   
        }
        $i++;
    }
    echo "<p> $k broja koja dele br $n su neparna i deljiva sa 3</p>";
    ?>
</body>
</html>