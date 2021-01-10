<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projekat</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel ="stylesheet" href ="style.css">
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div id="demo" class="carousel slide col-12" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <?php
                         $count = count(glob("images/*.jpeg"));
                        for($i=1;$i<=3;$i++){
                            $random = rand(1,$count);
                            if($i%3==0){
                                echo"<div class='img-fluid carousel-item active'><img src='images/$random.jpeg'></div>";
                            }
                            elseif($i%3==1){
                                echo"<div class='img-fluid carousel-item'><img src='images/$random.jpeg'></div>";
                            }
                            else{
                                echo"<div class='img-fluid carousel-item'><img src='images/$random.jpeg'></div>";
                            }
                        }
                        ?>
                    </div><!--end of carusel-inner -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div><!--end of demo -->
            </header>
            <div class="main row mt-5">
                <nav class="col-sm-4 d-flex justify-content-center col-12 float-sm-left">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href='index.php' class='nav-link text-dark font-italic font-weight-bolder'>Pocetna</a>
                        </li>
                        <li class="nav-item">
                            <a href='posao.php' class='nav-link text-dark font-italic font-weight-bolder'>Posao</a>
                        </li>
                        <li class="nav-item">
                            <a href='zdravlje.php' class='nav-link text-dark font-italic font-weight-bolder'>Zdravlje</a>
                        </li>
                        <li class="nav-item">
                            <a href='motivacija.php' class='nav-link text-dark font-italic font-weight-bolder'>Motivacija</a>
                        </li>
                    </ul>
                </nav>
                <section class="col-sm-8 col-12 mt-2 mt-sm-5">
                    <?php
                        $lines = file("citati/ljubav.txt");
                        $random = rand(0,count($lines)-1);
                        $citat ="";
                        $autor ="";
                        $error ="";
                        if($random > count($lines)-1){
                            $error = "Doslo je do greske";
                        }
                        if($random % 2 != 0){
                            $citat = $lines[$random -1];
                            $autor = $lines[$random];
                        }
                        if($random % 2 == 0){
                            $citat = $lines[$random];
                            $autor = $lines[$random+1];
                        }
                        echo "<p id='first-p' class=' text-center font-italic font-weight-bold lead mt-sm-5'>$citat</p>";
                        echo "<p id='second-p' class='text-center mb-5'>$autor</p>";
                        echo "<p class='text-center mb-5'>$error</p>";
                    ?>
                </section>
            </div><!--end of main -->
            <footer class="row mt-5 w-100">
                <div class="fixed-bottom text-center">
                <?php
                setlocale(LC_TIME, 'SR');
                $dan = strftime('%A');
                $datum = date("d,m,Y, h:i");
                echo"<p id='footer-p'class='col-sm-12 col-12'> $dan, $datum</p>";
                ?>
                </div>
            </footer>
        </div><!-- end of container-->
    </body>
</html>