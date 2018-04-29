<?php
if (!isset($_SESSION['checkComment'])) {
    session_start();
}
include_once "../login/dbh.php";

//$_SESSION['name']="darksiders2";
//$_SESSION['email']="ayman12@hotmail.com";
if (isset($_SESSION['name'])) {

    if (isset($_SESSION['username'])) {

        if (isset($_SESSION['email1'])) {
            $email = $_SESSION['email1'];
            $name = $_SESSION['username'];
            $game=$_SESSION['name'];

            if (isset($_POST['text1'])) {

                $email = $_SESSION['email1'];
                $text = $_POST['text1'];
                $name = $_SESSION['username'];
                $game=$_SESSION['name'];
                $query = "INSERT INTO `comment`(`gamename`,  `flag`, `text`, `username`) VALUES ('$game','0','$text','$name')";

                if (mysqli_query($DataBase, $query)) {
                } //else echo"nothing added";
            } //else echo"there is no text";
            $query = "SELECT `gamename`, `id`, `text`, `username` FROM `comment` WHERE `gamename`='$game'";

            if ($result = mysqli_query($DataBase, $query)) {

                while ($row = mysqli_fetch_assoc($result)) {

                    $gameName = $row['gamename'];
                    $Id = $row['id'];
                    //   echo $Id;

                    $text = $row['text'];
                    $name = $row['username'];

                    $likes = 0;
                    $dislkes = 0;
                    $query1 = "SELECT COUNT(*) AS t FROM `generallike` WHERE `commentId`='$Id' AND `likeC`= 1 AND `dislike`=0  AND  `gameName`='$gameName'";

                    //  echo $query1;
                    if ($result1 = mysqli_query($DataBase, $query1)) {

                        $row1 = mysqli_fetch_assoc($result1);
                        //print_r($row1);
                        $likes = $row1['t'];
                        //echo '<br>'.$likes;
                    }
                    $query2 = "SELECT COUNT(*) AS t FROM `generallike` WHERE `commentId`='$Id' AND`dislike`=1 AND `likeC`= 0 AND`gameName`='$gameName'";
                    //   echo $query2;
                    if ($result2 = mysqli_query($DataBase, $query2)) {
                        $row2 = mysqli_fetch_assoc($result2);
                        //echo '<br>';
                        //print_r($row2);
                        $dislkes = $row2['t'];

                        //echo '<br>';
                        //echo $dislkes;
                    }


                    $query3 = "SELECT DISTINCT  `likeC`, `dislike` FROM `generallike` WHERE `commentId`='$Id' And `personEmail`='$email' AND `gameName`='$game'";

                    if ($result3 = mysqli_query($DataBase, $query3)) {
                        $row3 = mysqli_fetch_assoc($result3);
                        $flag1=$row3['likeC'];
                        $flag2=$row3['dislike'];

                        $img1="";
                        $img2="";


                        if ($flag1==1){
                            $img1="assets/img/icons8-heart-40.png";
                            $img2="assets/img/icons8-skull-41.png";
                        }
                        else if ($flag2==1){
                            $img1="assets/img/icons8-heart-41.png";
                            $img2="assets/img/icons8-skull-40.png";
                        }
                        else{
                            $img1="assets/img/icons8-heart-41.png";
                            $img2="assets/img/icons8-skull-41.png";
                        }


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
                            <div class="col-lg-12" style="padding-right:0px;height:60px;margin-top:5px;"><img class="like" id="' . "a" . $Id . '" src="'.$img1.'" data-bs-hover-animate="tada" style="cursor:pointer;"><label  id="' . "c" . $Id . '" class="col-form-label" style="margin-left:10px;margin-top:10px;">' . $likes . '</label><img id="' . "b" . $Id . '" class="dislike" src="'.$img2.'" data-bs-hover-animate="tada" style="margin-left:30px;cursor:pointer;">
                                <label 
                                        class="col-form-label" style="margin-left:10px;margin-top:10px;"  id="' . "d" . $Id . '" >' . $dislkes . '</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
                    }
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


        } else echo "no user name";
    } else echo "game not here";
}
?>

