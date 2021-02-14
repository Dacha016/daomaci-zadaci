<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Videoteka21</title>
</head>
<body>
    <div class="wrapper">
        <h1>Videoteka 21</h1>
        <nav>
            <ul>
                <li><a href="index.php">Pocetna</a></li>
                <li><a href="podaci.php">Info o filmovima u db</a></li>
                <li><a href="zanrovi.php">Zanrovi</a></li>
                <li><a href="reziseri.php">Reziseri</a></li>
                <li><a href="godine.php">Godine</a></li>
            </ul>
        </nav>
    </div>
    <div class="wrapper main">
        <?php
        
        $sql="SELECT filmovi.naslov,reziseri.ime,reziseri.prezime,filmovi.godina,zanrovi.naziv,filmovi.ocena FROM reziseri
        INNER JOIN filmovi
        ON filmovi.reziseri_id = reziseri.id
        INNER JOIN filmovi_zanr 
        ON filmovi_zanr.filmovi_id = filmovi.id
        INNER JOIN zanrovi 
        ON filmovi_zanr.zanrovi_id = zanrovi.id
        WHERE ocena=(SELECT MAX(ocena)FROM filmovi)
        ORDER BY naslov;";
        $result=$conn->query($sql);
        if($result->num_rows){
        echo "<h3>Najbolje rangirani filmovi</h3>";
            echo "<table>";
                echo"<tr>
                    <th>Naziv filma</th>
                    <th>Ime rezisera</th>
                    <th>Prezime rezisera</th>
                    <th>Godina izdanja</th>
                    <th>Zanr</th>
                    <th>Ocena</th>
                </tr>";
            foreach($result as $row){
                echo "<tr>";
                    echo "<td>". $row['naslov']. "</td>";
                    echo "<td>". $row['ime']. "</td>";
                    echo "<td>". $row['prezime']. "</td>";
                    echo "<td>". $row['godina']. "</td>";
                    echo "<td>". $row['naziv']. "</td>";
                    echo "<td>". $row['ocena']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else{
            echo "Trenutno ne postoje filmovi u bazi";
        }
        ?>
    </div>
    <div class="wrapper footer">
        <p>Created by Dacha</p>
    </div>
</body>
</html>