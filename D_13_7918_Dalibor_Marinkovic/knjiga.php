<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Knjiga</title>
    </head>
    <body>
        <?php
        class Knjiga{
            private $naslov;
            private $autor;
            private $godIzdanja;
            private $brojStrana;
            private $cena;
        //constructor
            public function __construct($naslov,$autor,$godina,$strane,$cena){
                $this->setNaslov($naslov);
                $this->setAutor($autor);
                $this->setGodina($godina);
                $this->setStrane($strane);
                $this->setCena($cena);
            }
        //setters
            public function setNaslov($naslov){
                $this->naslov=$naslov;
            }
            public function setAutor($autor){
                $this->autor=$autor;
            }
            public function setGodina($godina){
                $this->godinaIzdanja=$godina;
            }
            public function setStrane($strane){
                $this->brojStrana=$strane;
            }
            public function setCena($cena){
                $this->cena=$cena;
            }
        //getters
            public function getNaslov($naslov){
                return $this->naslov;
            }
            public function getAutor($autor){
                return $this->autor;
            }
            public function getGodina($godina){
                return $this->godIzdanja;
            }
            public function getStrane($strane){
                return $this->brojStrana;
            }
            public function getCena($cena){
                return $this->cena;
            }
            public function stampaj(){
                echo"<p>Naslov knjige:<b>$this->naslov</b></p>";
                echo"<p>Autor knjige:<b>$this->autor</b></p>";
                echo"<p>Godina izdanja:<b>$this->godIzdanja godina</b></p>";
                echo"<p>Knjiga ima:<b>$this->brojStrana strana</b></p>";
                echo"<p>Cena knjige:<b>$this->cena dinara</b></p>";
            }
            public function obimna(){
                if($this->brojStrana>600){
                    return true;
                }
                else{
                    return false;
                }
            }
            public function skupa(){
                if($this->cena>8000){
                    return true;
                }
                else{
                    return false;
                }
            }
            public function dugackoime(){
                if(strlen($this->autor)>18){
                    return true;
                }
                else{
                    return false;
                }
                
            }
        }
        $k1= new Knjiga("Ime Ruze","Umberto Eko",1980,700,1200);
        $k1->stampaj();
        $k1->obimna();
        $k1->skupa();
        $k1->dugackoIme();
        ?>
    </body>
</html>
