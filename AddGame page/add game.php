<?php
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddGame</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">



</head>



<body style="background:rgb(67,67,67);height:1700px;">
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">HOME</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav ml-auto">

                 <?php
              $username=$_SESSION['username'];

                 echo '

                   <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">'.$username.'</a>
                   ';
                 ?>

                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Profile</a><a class="dropdown-item" role="presentation" href="#">Add Game</a><a class="dropdown-item" role="presentation" href="#">Logout</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container" style="width:800px;height:1950px;">
   <form method="post" action="add%20game%20handler.php" enctype="multipart/form-data">
    <div style="background:rgba(255,255,255,0.86);height:1902px;margin-top:100px;border-radius:8px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.52), 0 6px 20px 0 rgba(0,0,0,0.35);">
        <div class="col" data-aos="fade-down">
            <div class="row">
                <div class="col" style="background:rgba(255,255,255,0.24);margin-top:4px;"><label class="col-form-label" style="font-size:28px;padding-bottom:3px;padding-right:0;padding-left:9px;/*background:rgba(247,247,247,0.81);*/text-shadow:2px 2px 8px rgba(53,53,53,0.96);"><img src="assets/img/icons8-about-24.png" data-bs-hover-animate="tada" style="padding-right:9px;padding-bottom:5px;">Game Info</label></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">



                <div class="col"><label class="col-form-label" style="color:#2c2c2c;text-shadow:1px 1px 4px #414141;">Name</label><input type="text" id="GameName" style="margin-left:97px;height:30px;width:326px;" name="GameName"></div>



            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Company Name</label><input type="text" id="CompanyName" name = "CompanyName" style="margin-left:25px;height:30px;width:326px;/*width:100%;*/box-sizing:border-box;border:2px solid #ccc;border-radius:4px;font-size:16px;background-color:white;box-shadow:0 2px 4px 0 rgba(0,0,0,0.24), 0 3px 10px 0 rgba(0,0,0,0.03);text-shadow:1px 1px 4px rgba(41,41,41,0.2);"></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Download Link</label><input type="text" id="DownLink" name="DownLink" style="margin-left:34px;height:30px;width:326px;/*width:100%;*/box-sizing:border-box;border:2px solid #ccc;border-radius:4px;font-size:16px;background-color:white;box-shadow:0 2px 4px 0 rgba(0,0,0,0.24), 0 3px 10px 0 rgba(0,0,0,0.03);text-shadow:1px 1px 4px rgba(41,41,41,0.2);"></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Released Date</label><input type="date" id="ReleasedDate" name="Rlease" style="padding-top:0px;margin-left:38px;width:326px;box-sizing:border-box;border:2px solid #ccc;border-radius:4px;font-size:16px;background-color:white;box-shadow:0 2px 4px 0 rgba(0,0,0,0.24), 0 3px 10px 0 rgba(0,0,0,0.03);text-shadow:2px 2px 8px rgba(41,41,41,0.6);"></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Player Number</label><input type="number" name ="PlayerNum"min="0" max="99999999" id="PlayerNumber" style="margin-left:33px;width:326px;text-shadow:2px 2px 8px rgba(41,41,41,0.6);box-sizing:border-box;border:2px solid #ccc;border-radius:4px;font-size:16px;background-color:white;box-shadow:0 2px 4px 0 rgba(0,0,0,0.24), 0 3px 10px 0 rgba(0,0,0,0.03);"></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Age Required</label><input type="number" name="Age" min="5" max="90" id="AgeRequired" style="margin-left:41px;width:326px;text-shadow:2px 2px 8px rgba(41,41,41,0.6);"></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Video URL</label><input type="text" name ="video" id="VideoURL" style="margin-left:64px;height:30px;width:326px;"></div>
            </div>
        </div>
        <div class="col" data-aos="fade-down" style="padding-top:15px;">
            <div class="row" style="padding-top:19px;padding-bottom:18px;">
                <div class="col" style="padding-bottom:3px;padding-right:0;padding-left:9px;background:rgba(255,255,255,0.24);/*background:rgba(247,247,247,0.81);*/"><label class="col-form-label" style="font-size:28px;margin-left:0px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-picture-30.png" data-bs-hover-animate="jello" style="padding-right:9px;padding-bottom:5px;">Image Game</label></div>
            </div>
            <div class="row" id="BackGroundImagerow">
                <div class="col" style="width:759px;"><label class="col-form-label" style="padding-left:0px;text-shadow:2px 2px 8px rgba(53,53,53,0.72);">BG Image &nbsp;</label><input  type="file" id="BackGroundImage" style="padding-left:0;margin-left:24px;width:300px;" name="image1"></div>
            </div>
            <div class="row" id="FirstImagerow">
                <div class="col" style="width:759px;"><label class="col-form-label" style="padding-left:0px;text-shadow:2px 2px 8px rgba(53,53,53,0.72);">First Image</label><input  type="file" id="FirstImage" style="padding-left:0;margin-left:24px;width:300px;/*text-shadow:2px 2px 8px rgba(41,41,41,0.6);*/" name="image2"></div>
            </div>
            <div class="row" id="ScandImagerow">
                <div class="col"><label class="col-form-label" style="padding-left:0px;text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Scand Image</label><input type="file"  id="ScandImage" style="padding-left:0px;margin-left:11px;width:300px;" name="image3"></div>
            </div>
            <div class="row" id="ThirdImagerow">
                <div class="col"><label class="col-form-label" style="padding-left:0px;text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Third Image</label><input type="file"  id="ThirdImage" style="margin-left:16px;width:300px;" name="image4"></div>
            </div>
            <div class="row" id="IconImagerow">
                <div class="col"><label class="col-form-label" style="padding-left:0px;text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Game Icon<br></label><input  type="file" id="IconImage" style="margin-left:24px;width:300px;" name="icon"></div>
            </div>
        </div>
        <div class="col" data-aos="fade-down">
            <div class="row" style="padding-top:19px;padding-bottom:18px;">
                <div class="col" style="background:rgba(255,255,255,0.24);margin-top:4px;padding-bottom:3px;padding-right:0px;padding-left:9px;padding-top:0px;"><label class="col-form-label" style="font-size:28px;padding-bottom:3px;padding-right:0;padding-left:9px;/*background:rgba(247,247,247,0.81);*/text-shadow:2px 2px 8px rgba(53,53,53,0.96);"><img src="assets/img/icons8-resume-filled-24.png" data-bs-hover-animate="rubberBand" style="padding-right:9px;padding-bottom:5px;">Game Description</label></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Game Short Description</label></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;margin-top:-37px;">
                <div class="col"><textarea class="form-control-sm" id="GameShortDescription" name ="shortDes"style="width:100%;height:100%;"></textarea></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:-11px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);">Game Description</label></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;margin-top:-37px;">
                <div class="col"><textarea class="form-control-lg" name="decription" id="GameDescription" style="width:100%;height:100%; "></textarea></div>
            </div>
        </div>
        <div class="col" data-aos="fade-down">
            <div class="row" style="padding-top:19px;padding-bottom:18px;">
                <div class="col" style="background:rgba(255,255,255,0.24);margin-top:4px;padding-bottom:3px;padding-left:9px;"><label class="col-form-label" style="font-size:28px;padding-bottom:3px;padding-right:0;padding-left:9px;/*background:rgba(247,247,247,0.81);*/text-shadow:2px 2px 8px rgba(53,53,53,0.96);"><img src="assets/img/icons8-strategy-game-filled-24.png" data-bs-hover-animate="swing" style="padding-right:9px;padding-bottom:5px;">Game Type</label></div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col"><label class="col-form-label" style="color:#2c2c2c;text-shadow:1px 1px 4px #414141;margin-left:-3px;">Platforms</label>
                    <div class="form-check"><input class="form-check-input" name="plat1" type="checkbox" id="PlayStation"><label class="form-check-label" for="formCheck-1">PlayStation</label></div>
                    <div class="form-check"><input class="form-check-input" name="plat2" type="checkbox" id="Mobile"><label class="form-check-label" for="formCheck-2">Mobile</label></div>
                    <div class="form-check"><input class="form-check-input" name="plat3" type="checkbox" id="XBox"><label class="form-check-label" for="formCheck-3">XBox</label></div>
                    <div class="form-check"><input class="form-check-input" name="plat4" type="checkbox" id="PC"><label class="form-check-label" for="formCheck-4">PC</label></div>

                    <div class="form-check"><input class="form-check-input" name="plat5"  type="checkbox" id="OtherPlatform"><label class="form-check-label" for="formCheck-4">Other</label></div>

                </div>
            </div>
            <div class="row" style="padding-left:0px;padding-top:26px;padding-bottom:18px;">
                <div class="col" style="margin-top:-31px;"><label class="col-form-label" style="text-shadow:2px 2px 8px rgba(53,53,53,0.72);padding-left:0px;margin-left:-3px;">Game Type</label>
                    <div class="form-check" style="margin-left:15px;"><input class="form-check-input" name="type0" type="checkbox" id="Adventure"><label class="form-check-label" for="formCheck-1">Adventure</label></div>
                    <div class="form-check"><input class="form-check-input" name="type1" type="checkbox" id="Arcade"><label class="form-check-label" for="formCheck-1">Arcade<br></label></div>
                    <div class="form-check"><input class="form-check-input" name="type2" type="checkbox" id="Action"><label class="form-check-label" for="formCheck-1">Action<br></label></div>
                    <div class="form-check"><input class="form-check-input" name="type3" type="checkbox" id="Sports"><label class="form-check-label" for="formCheck-1">Sports<br></label></div>
                    <div class="form-check"><input class="form-check-input" name="type4" type="checkbox" id="Board"><label class="form-check-label" for="formCheck-1">Board</label></div>

                    <div class="form-check"><input class="form-check-input" name="type5" type="checkbox" id="OtherTypes"><label class="form-check-label" for="formCheck-1">Other</label></div>

                </div>
            </div>
        </div>

            <div class="row"style="padding-left:0px;padding-top:50px;padding-bottom:0px;margin-top:-70px;margin-right:0px;">
                <div class="col"><input type="submit" name="submit" value="Save" class="btn btn-success float-right"  style="width:100px;margin-left:0px;"></div>
            </div>

   </form>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-animation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>