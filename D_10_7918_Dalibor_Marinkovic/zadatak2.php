<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 10</title>
</head>
<body>
    <?php
       $n = 25;
       $i = 0;
       $k = 0;
       while($i<=$n){
           if($i%3==0){
               $k=$i;
               if($k%2!=0){
                   echo "<p> Delioc broja $n koji je deljiv sa 3 i neparn je: $k,</p>";
               }
           }
           $i++;
       }
    ?>
</body>
</html>