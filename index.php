<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 14</title>
</head>
<body>
    <?php
    class Video{
        private $naslov;
        private $trajanje;
        // constructor
        function __construct($naslov,$trajanje){
            $this->setNaslov($naslov);
            $this->setTrajanje($trajanje);
        }
        //setters
        function setNaslov($naslov){
            $this->naslov=$naslov;
        }
        function setTrajanje($trajanje){
            $this->trajanje=$trajanje;
        }
        //getters
        function getNaslov(){
            return $this->naslov;
        }
        function getTrajanje(){
            return $this->trajanje;
        }
        function stampaj(){
            echo"<p>Naslov filma je: $this->naslov</p>";
            echo"<p>Trajanje filma je: $this->trajanje minuta</p>";
        }
    }
    $f1 = new Video("Titanik",180);
    $f2 = new Video("300",94);
    $f3 = new Video("Mamurluk u Vegasu",105);
    $f4 = new Video("Lov i ribolov", 45);
    $videos = array($f1,$f2,$f3,$f4);
    // prosecno trajanje filma
    function prosek($videos){
        $sum=0;
        foreach($videos as $video){
            $sum+=$video->getTrajanje();
            
        }
        $prosecnoTraje=$sum/count($videos);
        return $prosecnoTraje;
    }
    echo "Video traje prosecno: " . prosek($videos) . " minuta";
    // film koj je najblizi prosecnom trajanju
    function najbliziProseku($videos){
        $sum=prosek($videos);
        $min=abs($videos[0]->getTrajanje()-$sum);
        $dVideo=array();
        for($i=1;$i<count($videos);$i++){
            $minimum=abs($videos[$i]->getTrajanje()-$sum);
            if($min>$minimum){
                $min=$minimum;
                $dVideo=$videos[$i];
            }
        } echo"<p><b>Video koji je najblizi proseku trajanja je: </b></p>";
        echo $dVideo->stampaj();

    }
    najbliziProseku($videos);
    ?>
</body>
</html>