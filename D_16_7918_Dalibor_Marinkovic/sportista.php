<?php
class Sportista{
    private $ime;
    private $prezime;
    private $godinaRodjenja;
    private $gradRodjenja;
//construct
    public function __construct($ime,$prezime,$godinaRodjenja,$gradRodjenja){
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodinaRodjenja($godinaRodjenja);
        $this->setGradRodjenja($gradRodjenja);
    }
//setters
    public function setIme($ime){
        $this->ime=$ime;
    }
    public function setPrezime($prezime){
        $this->prezime=$prezime;
    }
    public function setGodinaRodjenja($godinaRodjenja){
        $this->godinaRodjenja=$godinaRodjenja;
    }
    public function setGradRodjenja($gradRodjenja){
        $this->gradRodjenja=$gradRodjenja;
    }
//getters
    public function getIme(){
        return $this->ime;
    }
    public function getPrezime(){
        return $this->prezime;
    }
    public function getGodinaRodjenja(){
        return $this->godinaRodjenja;
    }
    public function getGradRodjenja(){
        return $this->gradRodjenja;
    }
/*methods
    public function ispisiSportistu(){
        echo "<p>Ime: $this->ime</p>";
        echo "<p>Prezime: $this->prezime</p>";
        echo "<p>Godina rodjenja: $this->godinaRodjenja</p>";
        echo "<p>Godina rodjenja: $this->gradRodjenja</p>";
    }*/
}
?>