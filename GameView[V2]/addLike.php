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

                    $query = "INSERT INTO `generallike`( `commentId`, `personEmail`, `likeC`, `dislike`, `gameName`) VALUES ('$Id','$email',1,0,'$name')";

                } else if ($flag == 2) {

                    $query="UPDATE `generallike` SET `likeC`=1,`dislike`=0 WHERE `commentId`='$Id' AND `personEmail`='$email' AND `gameName`='$name'";

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