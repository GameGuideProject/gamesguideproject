<?php

session_start();
include_once '../login/dbh.php';

if (isset($_POST['likeFlag'])) {
    if (isset($_SESSION['name'])) {
        if (isset($_SESSION['email'])) {
            if (isset($_POST['ID'])) {

                $flag = $_POST['likeFlag'];
                $name = $_SESSION['name'];
                $email = $_SESSION['email'];
                $Id=$_POST['ID'];
                if ($flag == 1) {

                    $query="SELECT COUNT(*) AS t FROM `generallike` WHERE `personEmail`='$email' AND `likeC`= 0 AND `dislike`=1  AND  `gameName`='$name'";

                    $count=0;
                    if ($result=mysqli_query($DataBase,$query)) {

                        $row1=mysqli_fetch_assoc($result);
                        $count=$row1['t'];


                    }

                    if ($count==0) {

                        $query = "INSERT INTO `generallike`( `commentId`, `personEmail`, `likeC`, `dislike`, `gameName`) VALUES ('$Id','$email',0,1,'$name')";
                    }
                    else $query="";
                } else if ($flag == 2) {

                    $query="UPDATE `generallike` SET `likeC`=0,`dislike`=1 WHERE `commentId`='$Id' AND `personEmail`='$email' AND `gameName`='$name'";

                } else if ($flag == 3) {

                    $query="UPDATE `generallike` SET `likeC`=0,`dislike`=0 WHERE `commentId`='$Id' AND `personEmail`='$email' AND `gameName`='$name'";

                }
                echo $query;

                if (mysqli_query($DataBase,$query)){

                }


            }
        }
    }
}
?>