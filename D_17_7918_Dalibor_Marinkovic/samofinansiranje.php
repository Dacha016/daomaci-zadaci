<?php
require_once "student.php";
class SamofinansirajuciStudent extends Student{
//construct
    public function __construct($ime,$osvojeniESPB,$prosecnaOcena){
        parent::__construct($ime,$osvojeniESPB,$prosecnaOcena);
    }
//methods
    public function skolarina($espb){
        if($this->prosecnaOcena<8){
            $skolarina=1900*$espb;
        }
        elseif($this->prosecnaOcena>=8){
            $skolarina=1600*$espb;
        }
        return $skolarina;
    }
    public function prijavaIspita(){
        echo"<p>Prijava ispita samofinansirajuceg studenta je: 400 dinara.</p>";
    }
}
?>