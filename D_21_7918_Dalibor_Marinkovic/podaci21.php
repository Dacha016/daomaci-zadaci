<?php require_once "header.php";?>
<div class="wrapper main">
        <?php
        $sql="SELECT filmovi.naslov,reziseri.ime,reziseri.prezime,filmovi.godina,zanrovi.naziv,filmovi.ocena FROM reziseri
        INNER JOIN filmovi
        ON filmovi.reziseri_id = reziseri.id
        INNER JOIN filmovi_zanr 
        ON filmovi_zanr.filmovi_id = filmovi.id
        INNER JOIN zanrovi 
        ON filmovi_zanr.zanrovi_id = zanrovi.id
        ORDER BY naslov;";
        $result=$conn->query($sql);
        if($result->num_rows){
        echo "<h3>Filmovi u bazi</h3>";
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
<?php require_once "footer.php";?>