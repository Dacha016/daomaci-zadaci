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
    <div class="wrapper header">
        <h1><a id="headline" href="index.php"> Videoteka 21</a></h1>
        <nav>
            <ul>
            <li id="podaci"><a href="podaci.php">Info o filmovima u db </a></li>
            <li id="najbolji"><a href="najbolji.php">Najbolje rangirani</a></li>
            <li id="zanrovi"><a href="zanrovi.php">Zanrovi</a></li>
            <li id="reziseri"><a href="reziseri.php">Reziseri</a></li>
            <li id=godine><a href="godine.php">Godine</a></li>
            </ul>
        </nav>
    </div>
    <div class="wrapper main">
        <h2 id="index-h2">Dobrodosli u bazu Videoteka 21 !!</h2>
        <form id="first-form" action="index.php" method="POST">
            <div>
                <label for="tabela">Unesite ime tabele u kojoj zelite unositi novi unos: </label><br>
                <input type="text" name="tabela" placeholder="Ime tabele" required>
                <button type="submit" name="submit" value="Submit" id="submit_form">Submit</button>
            </div>
            
        </form>
        <?php
        
        require_once "connection.php";
        
        if((isset($_POST['tabela'])&& $_POST['tabela'] !='')){
            $tabela=$conn->real_escape_string($_POST['tabela']);
            if($tabela=='reziseri'){
                echo '<div class="second-form"><form action="index.php"  method="POST">
                    <label for="reziseri">Id: </label>
                    <input type="number" name="id"><br><br>
                    <label for="reziseri">Ime: </label>
                    <input type="text" name="ime"><br><br>
                    <label for="reziseri">Prezime: </label>
                    <input type="text" name="prezime"><br><br>
                    <label for="reziseri">Pol: </label>
                    <input type="text" name="pol"><br><br>
                    <input type="submit" value="Submit">
                </form></div>';
                if((isset($_POST['id'])&& $_POST['id'] !='') && (isset($_POST['ime']) && $_POST['ime'] !='') && (isset($_POST['prezime'])&& $_POST['prezime'] !='')){
                    $id = $conn->real_escape_string($_POST['id']);
                    $ime = $conn->real_escape_string($_POST['ime']);
                    $prezime = $conn->real_escape_string($_POST['prezime']);
                    $pol = $conn->real_escape_string($_POST['pol']);
                    $sql="INSERT INTO reziseri (id, ime, prezime, pol) VALUES ('".$id."','".$ime."','".$prezime."', '".$pol."')";
                    $result=$conn->query($sql);
                    if(!$result = $conn->query($sql)){
                        die('There was an error running the query [' . $conn->error . ']');
                        echo "Popunite neophodna polja";
                    }
                    else{
                        echo "Unos je uspesan";
                    }
                }
            }
            elseif($tabela== 'zanrovi'){
                echo '<div class="second-form"><form action="index.php"  method="POST">
                    <label for="zanrovi">Id: </label>
                    <input type="number" name="id"><br><br>
                    <label for="zanrovi">Naziv: </label>
                    <input type="text" name="naziv"><br><br>
                    <input type="submit" value="Submit">
                </form></div>';
                if((isset($_POST['id'])&& $_POST['id'] !='') && (isset($_POST['naziv']) && $_POST['naziv'])){
                    $id = $conn->real_escape_string($_POST['id']);
                    $naziv = $conn->real_escape_string($_POST['naziv']);
                    $sql="INSERT INTO zanrovi (id, naziv) VALUES ('".$id."','".$naziv."')";
                    if(!$result = $conn->query($sql)){
                        die('There was an error running the query [' . $conn->error . ']');
                    }
                    else{
                        echo "Unos je uspesan";
                    }
                }
            }
            elseif($tabela=='filmovi'){
                echo '<div class="second-form"><form action="index.php"  method="POST">
                    <label for="filmovi">Id: </label>
                    <input type="number" name="id"><br><br>
                    <label for="filmovi">Naslov: </label>
                    <input type="text" name="naslov"><br><br>
                    <label for="filmovi">Godina: </label>
                    <input type="text" name="godina"><br><br>
                    <label for="filmovi">Ocena: </label>
                    <input type="text" name="ocena"><br><br>
                    <label for="filmovi">Reziser id: </label>
                    <input type="text" name="reziser_id"><br><br>
                    <input type="submit" value="Submit">
                </form></div>';
                if((isset($_POST['id'])&& $_POST['id'] !='') && (isset($_POST['naziv']) && $_POST['naziv'])){
                    $id = $conn->real_escape_string($_POST['id']);
                    $naslov = $conn->real_escape_string($_POST['naslov']);
                    $godina = $conn->real_escape_string($_POST['godina']);
                    $ocena = $conn->real_escape_string($_POST['ocena']);
                    $reziserId = $conn->real_escape_string($_POST['reziser_id']);
                    $sql="INSERT INTO filmovi (id, naslov, godina, ocena, reziser_id) VALUES ('".$id."','".$naslov."','".$godina."', '".$ocena."', '".$reziser_id."')";
                    if(!$result = $conn->query($sql)){
                        die('There was an error running the query [' . $conn->error . ']');
                    }
                    else{
                        echo "Unos je uspesan";
                    }
                }
            }
        } 
        ?>
    </div>
    <div class="wrapper footer">
        <p>Created by Dacha</p>
    </div>
</body>
</html>