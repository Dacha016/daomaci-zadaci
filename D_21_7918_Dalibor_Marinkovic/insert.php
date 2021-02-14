<?php
require_once "connection.php";
$sql="INSERT INTO reziseri
    VALUES
    (1,'Todd',' Phillips','M'),
    (2,'Srdjan',' Dragojevic','M'),
    (3,'Paul','Weitz','M'),
    (4,'James','Cameron','M'),
    (5,'John','McTiernan','M'),
    (6,'Paul','W. S. Anderson','M'),
    (7,'David','Michod','M'),
    (8,'James','Ponsoldt','M'),
    (9,'Fabián','Bielinsky','M'),
    (10,'Clint','Eastwood','M'),
    (11,'Quentin','Tarantino','M');";
$sql .="INSERT INTO filmovi
    VALUES
    (1,'Pritajeno zlo',2002,6.7,6),
    (2,'Americka pita',1999,7,3),
    (3,'Mamurluk u Vegasu',2009,7.7,1),
    (4,'Kralj',2019,7.3,7),
    (5,'Devojka od milion dolara',2004,8.1,10),
    (6,'Terminator',1984,8,4),
    (7,'Kill Bill',2003,8.1,11),
    (8,'Mi nismo andjeli',1992,8.4,2),
    (9,'Krug',2017,5.3,8),
    (10,'Aura',2005,7.1,9),
    (11,'Umri musi',1988,8.2,5);";
$sql .="INSERT INTO zanrovi
    VALUES
    (1,'Komedija'),
    (2,'Akcija'),
    (3,'Naucna fantastika'),
    (4,'Drama'),
    (5,'Horor'),
    (6,'Tragedija');";
$sql .="INSERT INTO filmovi_zanr
    VALUES
    (1,5),
    (2,1),
    (3,1),
    (4,4),
    (5,6),
    (6,3),
    (7,2),
    (8,1),
    (9,4),
    (10,4),
    (11,2);";
$result=$conn->multi_query($sql);
if($result){
    echo "Uspesno izvrsen niz upita";
}
else{
    echo "Greska prilikom izvrsenja niza upita ".$conn->error;
}
?>