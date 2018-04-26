<?php
session_start();
include_once '../login/dbh.php';
if (isset($_SESSION['check'])){
    $check=$_SESSION['check'];

}
else $check=0;

if (isset($_SESSION['username'])){
    $username= $_SESSION['username'];
}
else   $username='';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
<!--

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/Js/JQ.js"></script>
    <script src="assets/Js/bootS.js"></script>
    <script src="assets/Js/JS2.1.1.js"></script>
    <script src="assets/Js/script.min.js"></script>
    <script src="assets/Js/JavaScript.js"></script>
    <script src="assets/Js/view.js"> </script>
</head>

<body style="background-color:#515151;">

<div id="write" style="display: none"></div>
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="height:58px;">
        <div class="container"><a class="navbar-brand" href="#">Home</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="background:rgba(86,198,198,0.21);border-radius:20px;background-color:rgb(86,198,198);color:rgb(255,255,255);">ZaidHabiba</a>
                        <div
                            class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Profile<br></a><a class="dropdown-item" role="presentation" href="#">Message Box</a><a class="dropdown-item" role="presentation" href="#">Logout</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container" style="margin-top:90px;height:100%;border-radius:10px;">
    <div class="row">
        <?php
        $img1=$_SESSION['image1'];
      echo '  <div class="col-lg-2" style="padding-left:50px;margin-top:20px;"></div>';
        echo '<div class="col-lg-8" style="/*background:rgba(255,255,255,0.63);*/padding-bottom:15px;padding-top:15px;border-radius:5px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);border-radius:5px;background:rgba(255,255,255,0.69);"><img src="data:image/jpeg;base64,'.base64_encode($img1).'" data-aos="flip-left" data-aos-delay="100" id="GameSuperView" style="width:100%;height:100%;"></div>';
    ?>
        </div>
    <div class="row" style="background:rgba(255,255,255,0.63);padding-bottom:15px;border-radius:5px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);border-radius:5px;background:rgba(255,255,255,0.69);margin-top:50px;">

        <?php
        $img1=$_SESSION['image1'];
        $img2=$_SESSION['image2'];
        $img3=$_SESSION['image3'];
        $img4=$_SESSION['image4'];

#src="data:image/jpeg;base64,' .base64_encode($row1['image']).'"

     echo   "<div class='col' style='width:20%;padding-left:10px;padding-right:10px;padding-top:10px;'><img src='data:image/jpeg;base64,".base64_encode($img1)."'  id='Image1' style='width:100%;height:100%;cursor:pointer;' data-bs-hover-animate='pulse'  onclick=  'Loadfrom1();'  ></div>";

        echo   ' <div class="col" style="width:20%;padding-left:10px;padding-right:10px;padding-top:10px;"><img src= "data:image/jpeg;base64,'.base64_encode($img2).'" data-bs-hover-animate="pulse" onclick="Loadfrom2();"  id="Image2" style="width:100%;height:100%;cursor:pointer;"></div>';
          echo  ' <div class="col" style="width:20%;padding-left:10px;padding-right:10px;padding-top:10px;"><img src="data:image/jpeg;base64,'.base64_encode($img3).'" data-bs-hover-animate="pulse" onclick="Loadfrom3();"  id="Image3" style="width:100%;height:100%;cursor:pointer;"></div>';
            echo '<div class="col-lg-3" style="width:20%;padding-left:10px;padding-right:10px;padding-top:10px;"><img src="data:image/jpeg;base64,'.base64_encode($img4).'" data-bs-hover-animate="pulse" onclick="Loadfrom4();"  id="Image4" style="width:100%;height:100%;cursor:pointer;"></div>';

     ?>
</div>
    <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:60px;">
        <?php

        $icon=$_SESSION['icon'];
        echo '<div class="col" style="background-color:rgba(179,179,179,0.47);box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0,0,0,0.32);"><label class="col-form-label" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="data:image/jpeg;base64,'.base64_encode($icon).'" data-bs-hover-animate="bounce" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">Super Mario Maker</label>
    '    ?>

        <?php
if ($check==1) {

    echo ' <img id ="favoriteicon"  class="float-right" src="assets/img/icons8-rating-41.png" data-bs-hover-animate="rubberBand" style="margin-top:15px;cursor:pointer;"></div> ';
    //onclick="addtoDB()"
}

else {
    echo ' <img id ="favoriteicon1" class="float-right" src="assets/img/icons8-rating-40.png" data-bs-hover-animate="rubberBand" style="margin-top:15px;cursor:pointer;"></div> ';

}



  ?>


</div>
    <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;height:1345px;/*border-radius:9px;*/">
        <div class="col" style="height:609px;">
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">


                <?php

                $name=$_SESSION['name'];
             echo '   <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:32px;padding-right:31px;background-color:rgba(0,0,0,0.2);margin-right:0px;margin-left:0px;">Game Name<br></label><label class="col-form-label"  style="margin-left:20px;">'.$name.'<br></label></div>
     '  ;    ?>



            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">

            <?php

              $company=$_SESSION['company'];
               echo'  <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:15px;padding-right:15px;background-color:rgba(0,0,0,0.2);margin-right:0px;margin-left:0px;">Company Name<br></label>
                    <label
                        class="col-form-label" style="margin-left:20px;">'.$company.'</label>
                </div>
            ';
            ?>
            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">
                <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:20px;padding-right:21px;background-color:rgba(0,0,0,0.2);">Player Number<br>

                    <?php
                    $playerNum=$_SESSION['playerNum'];
                  echo '  </label><label class="col-form-label" style="margin-left:20px;">'.$playerNum.'</label>';
                ?>

                </div>
            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>

            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">
                <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:62px;padding-right:60px;background-color:rgba(0,0,0,0.2);margin-right:0px;margin-left:0px;">Views<br></label>

                    <?php

                    $view=$_SESSION['views'];

             echo '       <label class="col-form-label"  style="margin-left:20px;"><img src="assets/img/icons8-eye-18.png" data-bs-hover-animate="swing" style="padding-left:0px;margin-left:0px;padding-right:4px;padding-bottom:2px;">'.$view.'<br></label></div>
           '; ?>

            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">
                <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);">

                <?php

                $down=$_SESSION['Downlink'];
                    echo '<label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:40px;padding-right:40px;background-color:rgba(0,0,0,0.2);">Game Link<br></label><a class="btn btn-link" role="button" href="'.$down.'" style="margin-left:20px;padding-right:0px;padding-left:0px;padding-bottom:6px;padding-top:5px;">'.$down.'<br></a></div>
                   '; ?>

            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">

                <?php


                $Age=$_SESSION['Age'];
             echo'     <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:26px;padding-right:27px;background-color:rgba(0,0,0,0.2);">Age Required<br></label><label class="col-form-label" style="margin-left:20px;">'.$Age.'</label></div>
            
               ';  ?>
            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:10px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);background-color:rgba(227,227,227,0.96);"></div>
            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">

                <?php

                $date=$_SESSION['rleaseDate'];
               echo '    <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:30px;padding-right:29px;background-color:rgba(0,0,0,0.2);margin-right:0px;margin-left:0px;">Release Date<br></label>
                
                 
                    <label
                        class="col-form-label" style="margin-left:20px;"> '.$date.'<br></label>
              ';
               ?>
                </div>
            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">
                <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:52px;padding-right:37px;background-color:rgba(0,0,0,0.2);">Platforms<br></label><img src="assets/img/pc.png" data-bs-hover-animate="jello"
                                                                                                                                                                                                                                                                                                                                                            style="padding-right:4px;padding-left:10px;padding-bottom:4px;"><img src="assets/img/playstation.png" data-bs-hover-animate="jello" style="padding-right:4px;padding-left:10px;padding-bottom:4px;"><img src="assets/img/xbox.png" data-bs-hover-animate="jello"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     style="padding-right:4px;padding-left:10px;padding-bottom:4px;"><img src="assets/img/Action.png" data-bs-hover-animate="jello" style="padding-right:4px;padding-left:10px;padding-bottom:4px;"><img src="assets/img/board.png" data-bs-hover-animate="jello"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         style="padding-right:4px;padding-left:10px;padding-bottom:4px;"></div>
            </div>
                <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
                <div class="row" style="background:rgb(228,228,228);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">
                    <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:37px;padding-right:37px;background-color:rgba(0,0,0,0.2);width:172px;">Categories<br></label><img src="assets/img/Action.png"
                                                                                                                                                                                                                                                                                                                                                                             data-bs-hover-animate="jello" style="padding-right:4px;padding-left:10px;padding-bottom:4px;"><img src="assets/img/board.png" data-bs-hover-animate="jello" style="padding-right:4px;padding-left:10px;padding-bottom:4px;"></div>
                </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:154px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);">
                <div class="col">
                    <div class="row">
                        <div class="col" style="padding-left:0px;padding-right:0px;/*box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);*/margin-right:0px;height:100%;"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:31px;padding-right:30px;background-color:rgba(0,0,0,0.2);">About Game<br></label></div>
                    </div>
                    <div class="row" style="outline='none' ; height:103px;margin-left:0px;margin-right:0px;width:100%;">

                   <?php

                   $desc=$_SESSION['description'];
                     echo '  <div class="col" style="padding-right:0px;padding-left:0px;"><textarea style="width:100%;height:100%;padding:0px 0px;box-sizing:border-box;border:2px solid rgba(204,204,204,0);border-radius:4px;background-color:rgba(248,248,248,0);font-size:16px;resize:none;text-shadow:2px 2px 8px rgba(41,41,41,0.6);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;" readonly="">'.$desc.'</textarea></div>
                   ';
                   ?>
                    </div>
                </div>
            </div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
            <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:480px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.6), 0 6px 20px 0 rgba(0,0,0,0.36);">
                <div class="col" style="height:100%;">
                    <div class="row">
                        <div class="col" style="padding-left:0px;padding-right:0px;/*box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);*/margin-right:0px;height:100%;"><label class="col-form-label" style="font-size:20px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:57px;padding-right:57px;background-color:rgba(0,0,0,0.2);">Trailer&nbsp;<br></label></div>
                    </div>
                    <div class="row" style="height:430px;margin-left:0px;margin-right:0px;width:100%;">

                    <?php

                    $video= $_SESSION['video'];
                   # echo $video;
                     echo '    <div class="col" style="padding-right:0px;padding-left:0px;padding-top:0px;height:372px;"><iframe  width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/'.$video.'" style="height:100%;width:60%;margin-top:20px;margin-left:20%;"></iframe></div>';

                    $v='JaRq73y5MJk';
                 # echo '  <div class="col" style="padding-right:0px;padding-left:0px;padding-top:0px;height:372px;"><iframe  type="video/mp4" width="560" height="315" allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/tgbNymZ7vqY " style="height:100%;width:60%;margin-top:20px;margin-left:20%;"></iframe></div>
                       

                    ?>

                    </div>
                </div>
            </div>

                <div class="row" style="background:rgba(227,227,227,0.9);padding-top:0px;margin-top:0px;height:8px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.22);"></div>
                <div class="row" style="background:rgba(164,164,164,0.54);padding-top:0px;margin-top:0px;padding-top:0px;margin-top:0px;">
                    <div class="col" style="padding-left:0px;padding-right:0px;box-shadow:0 4px 8px 0 rgba(24,24,24,0.36), 0 6px 20px 0 rgba(25,25,25,0.15);width:100%;">
                        <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image1('Star1','Star2','Star3','Star4','Star5','SubmitRateButton','RateText')" style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image2('Star1','Star2','Star3','Star4','Star5','SubmitRateButton','RateText')"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image3('Star1','Star2','Star3','Star4','Star5','SubmitRateButton','RateText')"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image4('Star1','Star2','Star3','Star4','Star5','SubmitRateButton','RateText')"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image5('Star1','Star2','Star3','Star4','Star5','SubmitRateButton','RateText')"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-right:0px;margin-left:0px;width:100%;">
                            <div class="col" style="width:100%;height:100%;padding-right:30px;padding-left:48%;padding-bottom:10px;padding-top:10px;"><label class="col-form-label" id="RateText" style="padding-left:0px;font-size:21px;">ADD RATE</label></div>
                        </div>
                        <div class="row" style="margin-right:0px;margin-left:0px;width:100%;">
                            <div class="col" style="width:100%;height:100%;padding-right:30px;padding-left:0px;padding-bottom:10px;padding-top:40px;"><button class="btn btn-dark float-right" type="button" id="SubmitRateButton" style="border-radius:0px;">Rate</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:117px;">
            <div class="col" style="background-color:#ffffff;height:100%;margin-top:30px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.82), 0 6px 20px 0 rgba(0,0,0,0.35);">
                <div class="row" style="/*background-color:#eaeaea;*/height:260px;">
                    <div class="col" style="height:250px;">

                        <?php
                        if ($check==1) {
                            echo '<div class="row" style="margin-top:18px;margin-left:0px;"><label data-aos="flip-up" data-aos-delay="200" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-male-user-filled-50.png" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">'.$username.'</label></div>';
                        }
                        else {
                            echo '<div class="row" style="margin-top:18px;margin-left:0px;"><label data-aos="flip-up" data-aos-delay="200" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-male-user-filled-50.png" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">Write your comment</label></div>';

                        }
                        ?>

                        <div class="row" style="height:140px;margin-right:0px;margin-bottom:0px;">

                            <div class="col-lg-12" style="padding-right:0px;height:120px;"><textarea id="TextArea1" style="outline='none' ;width:100%;height:100%;padding:0px 0px;box-sizing:border-box;border:2px solid rgba(163,163,163,0.53);border-radius:4px;background-color:rgba(248,248,248,0);font-size:16px;resize:none;text-shadow:2px 2px 8px rgba(41,41,41,0.6);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:5px;margin-right:0;margin-left:0px; "></textarea>

                                <button class="btn btn-secondary float-right" type="button" style="padding-right:30px;padding-left:30px;" id="addcomment"  onclick="post();">Post</button>
<!-- onclick="post(document.getElementById('TextArea1'));" -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="commentField">

        <div class="row" data-aos="fade-down" style="/*height:260px;*/">
            <div class="col" style="background-color:#e0e0e0;height:100%;margin-top:30px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.52), 0 6px 20px 0 rgba(0,0,0,0.35);">
                <div class="row" style="/*background-color:#eaeaea;*/height:251px;">
                    <div class="col" style="height:100%;">
                        <div class="row" style="margin-top:18px;margin-left:0px;"><label id ="tmp" data-aos="flip-up" data-aos-delay="250" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-male-user-filled-50.png" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">ZaidHabiba</label>
                            <div
                                    class="col"><img class="float-right" src="assets/img/icons8-menu-40.png" style="cursor:pointer;"></div>
                        </div>
                        <div class="row" style="height:100px;margin-right:0px;margin-bottom:0px;">
                            <div  class="col-lg-12" style="padding-right:0px;height:100%;"><textarea  style="width:100%;height:100%;padding:0px 0px;box-sizing:border-box;border:2px solid rgba(204,204,204,0);border-radius:4px;background-color:rgba(248,248,248,0);font-size:16px;resize:none;text-shadow:2px 2px 8px rgba(41,41,41,0.6);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;"
                                                                                                    readonly="">  </textarea></div>
                        </div>
                        <div class="row" style="height:64px;margin-right:0px;margin-bottom:0px;">
                            <div class="col-lg-12" style="padding-right:0px;height:60px;margin-top:5px;"><img src="assets/img/icons8-heart-40.png" data-bs-hover-animate="tada" style="cursor:pointer;"><label class="col-form-label" style="margin-left:10px;margin-top:10px;">0</label><img src="assets/img/icons8-skull-40.png" data-bs-hover-animate="tada" style="margin-left:30px;cursor:pointer;">
                                <label
                                        class="col-form-label" style="margin-left:10px;margin-top:10px;">0</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
</body>

</html>