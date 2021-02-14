<?php
$servername="localhost";
$username= "admin";
$password="admin123";
$db="muzika";
$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Error connecting to database: ". $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zadatak 20</title>
</head>
<body>
    <?php
        $sql="SELECT kompozicije.naziv as 'naziv_kompozicije', SEC_TO_TIME(kompozicije.trajanje), kompozicije.god, periodi.naziv
        FROM kompozicije
        INNER JOIN periodi
        ON kompozicije.periodi_id=periodi.id
        ORDER BY kompozicije.naziv";
        $result= $conn->query($sql);
        if($result->num_rows){
            echo "<table>";
                echo"<tr>
                        <th>Naziv kompozicije</th>
                        <th>Trajanje</th>
                        <th>Godina komponovanja</th>
                        <th>Period</th>
                    </tr>";
                foreach($result as $row){
                    echo "<tr>";
                    echo "<td>". $row['naziv_kompozicije']. "</td>";
                    echo "<td>". $row['SEC_TO_TIME(kompozicije.trajanje)']. "</td>";
                    echo "<td>". $row['god']. "</td>";
                    echo "<td>". $row['naziv']. "</td>";
                }
            echo "</table>";
        }
        else{
            echo "Trenutno ne postoje kompozicije u bazi";
        }
    ?>
</body>
</html>
