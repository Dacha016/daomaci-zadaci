<?php
require_once "student.php";
class BudzetskiStudent extends Student{
//construct
    public function __construct($ime,$osvojeniESPB,$prosecnaOcena){
        parent::__construct($ime,$osvojeniESPB,$prosecnaOcena);
    }
//methods
    public function skolarina($espb){
        return $skolarina=(300-$this->osvojeniESPB)*200;
    }
    public function prijavaIspita(){
        echo"<p>Prijava ispita studenta na budzetu je: 100 dinara.</p>";
    }
}
?>