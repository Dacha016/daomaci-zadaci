<?php
require_once "connection.php";
$sql="CREATE TABLE IF NOT EXISTS reziseri (
    id INT UNSIGNED PRIMARY KEY,
    ime VARCHAR(45) NOT NULL,
    prezime VARCHAR(45) NOT NULL,
    pol CHAR(1))
    ENGINE = InnoDB;";
$sql .="CREATE TABLE IF NOT EXISTS filmovi ( 
    id INT UNSIGNED PRIMARY KEY,
    naslov VARCHAR(45),
    godina SMALLINT UNSIGNED,
    ocena DECIMAL(6,2),
    reziseri_id INT UNSIGNED,
    FOREIGN KEY(reziseri_id)
    REFERENCES reziseri(id))
    ENGINE = InnoDB;";
$sql .="CREATE TABLE IF NOT EXISTS zanrovi(
    id INT UNSIGNED PRIMARY KEY,
    naziv VARCHAR(45))
    ENGINE = InnoDB;";
$sql .="CREATE TABLE IF NOT EXISTS filmovi_zanr(
    filmovi_id INT UNSIGNED,
    FOREIGN KEY(filmovi_id)
    REFERENCES filmovi(id),
    zanrovi_id INT UNSIGNED,
    FOREIGN KEY(zanrovi_id)
    REFERENCES zanrovi(id),
    PRIMARY KEY(filmovi_id,zanrovi_id))
    ENGINE = InnoDB;";
$result=$conn->multi_query($sql);
if($result){
    echo "Uspesno izvrsen niz upita";
}
else{
    echo "Greska prilikom izvrsenja niza upita ".$conn->error;
}
?>