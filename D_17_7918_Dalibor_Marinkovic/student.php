<?php
abstract class Student{
    protected $ime;
    protected $osvojeniESPB;
    protected $prosecnaOcena;
// constructor
    public function __construct($ime,$osvojeniESPB,$prosecnaOcena){
        $this->setIme($ime);
        $this->setOsvojeniESPB($osvojeniESPB);
        $this->setProsecnaOcena($prosecnaOcena);
    }
//setters
    public function setIme($ime){
        $this->ime=$ime;
    }
    public function setOsvojeniESPB($osvojeniESPB){
        if($osvojeniESPB<0){
            $this->osvojeniESPB=0;
        }
        elseif($osvojeniESPB>300){
            $this->osvojeniESPB=300;
        }
        else{
            $this->osvojeniESPB=$osvojeniESPB;
        }
    }
    public function setProsecnaOcena($prosecnaOcena){
        if($prosecnaOcena<5){
            $this->prosecnaOcena=5;
        }
        elseif($prosecnaOcena>10){
            $this->prosecnaOcena=10;
        }
        else{
            $this->prosecnaOcena=$prosecnaOcena;
        }
    }
//getters
    public function getIme(){
        return $this->ime;
    }
    public function getOsvojeniESPB(){
        return $this->osvojeniESPB;
    }
    public function getProsecnaOcena(){
        return $this->prosecnaOcena;
    }
//methods
    public function stampaj(){
        echo"<p>Ime studenta: $this->ime</p>";
        echo"<p>Osvojeni ESPB: $this->osvojeniESPB</p>";
        echo"<p>Prosecna ocena studenta je: $this->prosecnaOcena</p>";
        echo"<p>Skolarina studenta je: {$this->skolarina(rand(35,60))}</p>";
    }
    public abstract function skolarina($espb);
    public abstract function prijavaIspita();
}
?>