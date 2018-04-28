<?php
if (isset($_SESSION['checkComment'])) {
    session_start();
}
include_once "../login/dbh.php";


if (isset($_SESSION['game'])) {

    if (isset($_SESSION['username'])) {

        if (isset($_POST['text1'])) {
            $game = $_SESSION['game'];
            $email = $_SESSION['email'];
            $text = $_POST['text1'];
            $name=$_SESSION['username'];

            $query="INSERT INTO `comment`(`gamename`,  `flag`, `text`, `username`) VALUES ('$game','0','$text','$name')";

            if (mysqli_query($DataBase,$query)){

                $query="SELECT  `gamename`, `id`, `text`, `username` FROM `comment` WHERE 1";

                if ($result=mysqli_query($DataBase,$query)){

                    while($row = mysqli_fetch_assoc($result)) {

                        $gameName=$row['gamename'];
                        $Id=$row['id'];
                        $text = $row['text'];
                        $name = $row['username'];

                        $likes=0;
                        $dislkes=0;
                        $query1="SELECT COUNT(*) FROM `generallike` WHERE `commentId`='$Id' AND`likeC`='1' AND`gameName`='$gameName'";


                        echo ' <div class="row" data-aos="fade-down" style="/*height:260px;*/">
            <div class="col" style="background-color:#e0e0e0;height:100%;margin-top:30px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.52), 0 6px 20px 0 rgba(0,0,0,0.35);">
                <div class="row" style="/*background-color:#eaeaea;*/ height:251px;">
                    <div class="col" style="height:100%;">
                        <div class="row" style="margin-top:18px;margin-left:0px;"><label id ="tmp" data-aos="flip-up" data-aos-delay="250" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-male-user-filled-50.png" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">' . $name . '</label>
                            <div
                                    class="col"><img class="float-right" src="assets/img/icons8-menu-40.png" style="cursor:pointer;"></div>
                        </div>
                        <div class="row" style="height:100px;margin-right:0px;margin-bottom:0px;">
                            <div  class="col-lg-12" style="padding-right:0px;height:100%;"><textarea  style="width:100%;height:100%;padding:0px 0px;box-sizing:border-box;border:2px solid rgba(204,204,204,0);border-radius:4px;background-color:rgba(248,248,248,0);font-size:16px;resize:none;text-shadow:2px 2px 8px rgba(41,41,41,0.6);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;"
                                                                                                    readonly=""> ' . $text . ' </textarea></div>
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
        </div>';
                    }
                }

              //  echo' <div class="row" data-aos="fade-down" style="/*height:260px;*/">
            /*<div class="col" style="background-color:#e0e0e0;height:100%;margin-top:30px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.52), 0 6px 20px 0 rgba(0,0,0,0.35);">
                <div class="row" style="/*background-color:#eaeaea;*/ /*height:251px;">
                    <div class="col" style="height:100%;">
                        <div class="row" style="margin-top:18px;margin-left:0px;"><label id ="tmp" data-aos="flip-up" data-aos-delay="250" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-male-user-filled-50.png" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">'..'</label>
                            <div
                                    class="col"><img class="float-right" src="assets/img/icons8-menu-40.png" style="cursor:pointer;"></div>
                        </div>
                        <div class="row" style="height:100px;margin-right:0px;margin-bottom:0px;">
                            <div  class="col-lg-12" style="padding-right:0px;height:100%;"><textarea  style="width:100%;height:100%;padding:0px 0px;box-sizing:border-box;border:2px solid rgba(204,204,204,0);border-radius:4px;background-color:rgba(248,248,248,0);font-size:16px;resize:none;text-shadow:2px 2px 8px rgba(41,41,41,0.6);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;"
                                                                                                    readonly=""> '.$text.' </textarea></div>
                        </div>
                        <div class="row" style="height:64px;margin-right:0px;margin-bottom:0px;">
                            <div class="col-lg-12" style="padding-right:0px;height:60px;margin-top:5px;"><img src="assets/img/icons8-heart-40.png" data-bs-hover-animate="tada" style="cursor:pointer;"><label class="col-form-label" style="margin-left:10px;margin-top:10px;">856</label><img src="assets/img/icons8-skull-40.png" data-bs-hover-animate="tada" style="margin-left:30px;cursor:pointer;">
                                <label
                                        class="col-form-label" style="margin-left:10px;margin-top:10px;">3</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
                */

                //  echo"comment added";
            }
            else echo"nothing added";
        }else echo"text not added";

    }else echo"no user name";
}else echo "game not here";
?>

