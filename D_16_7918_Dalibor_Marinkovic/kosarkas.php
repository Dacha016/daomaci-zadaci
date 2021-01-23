<?php
require_once "sportista.php";
class Kosarkas extends Sportista{
    private $poeni;
//construct
    public function __construct($ime,$prezime,$godinaRodjenja,$gradRodjenja,$poeni){
        parent::__construct($ime,$prezime,$godinaRodjenja,$gradRodjenja);
        $this->setPoeni($poeni);
    }
//setters
    public function setPoeni($poeni){
        $this->poeni=$poeni;
    }
//gettrs
    public function getPoeni(){
        return $this->poeni;
    }
/*methods
    public function ispisiKosarkas(){
    $this->ispisiSportistu();
    echo "<p>Poeni kosarkasa: $this->poeni poena</p>";
    }*/
}
/*$k= new Kosarkas("Luka","Marinkovic",2015,"Leskovac",250);
$k->ispisiKosarkas();*/
?>