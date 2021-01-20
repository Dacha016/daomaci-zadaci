<?php
class Autobus{
    private $regBroj;
    private $brSedista;
    //constructor
    public function __construct($regBroj,$brSedista){
       $this->setRegistracija($regBroj);
        $this->setSedista($brSedista);
    }
    //setters
    public function setRegistracija($regBroj){
       $this->regBroj=$regBroj;
    }
    public function setSedista($brSedista){
        $this->brSedista=$brSedista;
    }
    // getters
    public function getRegistracija(){
        return $this->regBroj;
    }
    public function getSedista(){
        return $this->brSedista;
    }
    //methods
    function stampaj(){
        echo"<p>Registarski broj autobusa je: $this->regBroj </p>";
        echo"<p>Autobus ima $this->brSedista sedista</p>";
    }
}
?>