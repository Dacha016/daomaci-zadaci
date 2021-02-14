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
        <h1>Videoteka 21</h1>
        <nav>
            <ul>
            <li><a href="podaci.php">Info o filmovima u db </a></li>
            <li><a href="najbolji.php">Najbolje rangirani</a></li>
            <li><a href="zanrovi.php">Zanrovi</a></li>
            <li><a href="reziseri.php">Reziseri</a></li>
            <li><a href="godine.php">Godine</a></li>
            </ul>
        </nav>
    </div>
    <div class="wrapper main">
        <h2 id="index-h2">Dobrodosli u bazu Videoteka 21 !!</h2>
    </div>
    <div class="wrapper footer">
        <p>Created by Dacha</p>
    </div>
</body>
</html>