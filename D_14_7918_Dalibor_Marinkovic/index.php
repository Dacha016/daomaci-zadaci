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
        $f2 = new Video("300",93);
        $f3 = new Video("Mamurluk u Vegasu",106);
        $f4 = new Video("Lov i ribolov", 45);
        $f5 = new Video("Lov na vestice",106);
        $videos = array($f1,$f2,$f3,$f4,$f5);
        //prosek duzine videa
        function prosek($videos){
            $sum=0;
            foreach($videos as $video){
                $sum+=$video->getTrajanje();
                
            }
            $prosecnoTraje=$sum/count($videos);
            return $prosecnoTraje;
        }
        echo "Video traje prosecno: " . prosek($videos) . " minuta";
        // najblizi proseku
        function najbliziProseku($videos){
            $sum=prosek($videos);
            $min=abs($videos[0]->getTrajanje()-$sum);
            foreach($videos as $video){
                $minimum=abs($video->getTrajanje()-$sum);
                if($min>$minimum){
                    $min=$minimum;
                }
            }
            echo"<p><b>Video koji je najblizi proseku trajanja je: </b></p>";
            foreach($videos as $video){
                $minimum=abs($video->getTrajanje()-$sum);
                if($min==$minimum){
                    $dVideo=$video;
                    $dVideo->stampaj();
                    break;
                }
            }
        }
    najbliziProseku($videos);
    ?>
</body>
</html>