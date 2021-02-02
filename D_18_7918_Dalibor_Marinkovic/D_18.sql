--kreiranje baze
CREATE DATABASE `videoteka`;
--kreiranje tabele
CREATE TABLE `filmovi`
(
`id` INT PRIMARY KEY,
`naslov` VARCHAR(255) NOT NULL,
`reziser` VARCHAR(255) NOT NULL,
`god_izdanja` YEAR NOT NULL,
`zanr` VARCHAR(255) NOT NULL,
`ocena` DECIMAL(2,1)
);
--dodavanje filmova u bazu
INSERT INTO `filmovi`
(`id`,`naslov`,`reziser`,`god_izdanja`,`zanr`,`ocena`)
VALUES
(1,"Mamurluk u Vegasu","Todd Phillips",2009,"Komedija",7.7),
(2,"Mi nismo andjeli","Srdjan Dragojevic",1992,"Komedija",8.4),
(3,"Americka pita","Paul Weitz",1999,"Komedija",7),
(4,"Terminator","James Cameron",1984,"Naucna Fantastika",8),
(5,"Umri musi","John McTiernan",1988,"Akcija",8.2),
(6,"Pritajeno zlo","Paul W. S. Anderson",2002,"Horor",6.7),
(7,"Kralj","David Michod",2019,"Drama",7.3),
(8,"Krug","James Ponsoldt",2017,"Drama",5.3),
(9,"Aura","Fabián Bielinsky",2005,"Drama",7.1),
(10,"Devojka od milion dolara","Clint Eastwood",2004,"Tragedija",8.1),
(11,"Kill Bill","Quentin Tarantino",2003,"Akcija",8.1);
-- selektovanje (Tragedije, Komedije,Drame)
SELECT * FROM `filmovi`
WHERE `zanr` LIKE "Tragedija" OR `zanr` LIKE "Komedija" OR `zanr` LIKE "Drama";
--Selektovati sve filmove kojima je ocena između 5 i 10.
SELECT * FROM `filmovi` 
WHERE `ocena` BETWEEN 5 AND 10;
--Selektovati režisere (bez ponavljanja) koji su režirali filmove izdate 2003. godine i poređati ih abecednim redom.
SELECT DISTINCT `reziser` FROM `filmovi`
WHERE `god_izdanja` = 2003
ORDER BY `reziser`;
--Selektovati sve filmove tako da im zanr nije komedija.
SELECT * FROM `filmovi`
WHERE `zanr` !="Komedija";
--Prikazati sve informacije o najbojle rangiranom filmu
SELECT * FROM `filmovi`
WHERE `ocena`=(SELECT MAX(`ocena`) FROM `filmovi`);
--Prikazati sve informacije o najbolje rangiranoj drami.
SELECT * FROM `filmovi`
ORDER BY `zanr`="Drama" DESC
LIMIT 1;
--Selektovati trojicu rezisera ciji filmovi imaju najbolje ocene.
SELECT `reziser` FROM `filmovi` 
ORDER BY `ocena` DESC
LIMIT 3;
--Selektovati sve žanrove filmova, bez ponavljanja.
SELECT DISTINCT `zanr` FROM `filmovi` ;
--Selektovati sve filmove u obliku naslov (režiser).
SELECT `naslov`,`reziser` FROM `filmovi`;
--naslov (režiser) – godina izdanja. Selektovane filmove sortirati rastuće prema godini izdanja.
SELECT `naslov`,`reziser`, `god_izdanja` FROM `filmovi`
ORDER BY `god_izdanja` ;

--Odrediti prosečnu ocenu fimova koji su izdati nakon 2000 godine
SELECT AVG(`ocena`) AS "Prosecna ocena filmova koji su izdati nakon 2000-te" FROM `filmovi`	
WHERE `god_izdanja`>2000;

