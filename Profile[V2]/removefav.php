<?php
session_start();
include_once "../login/dbh.php";
if (isset($_POST['RemoveFav'])){
    if (isset($_SESSION['email'])){

        $email=$_SESSION['email'];
        $game=$_POST['RemoveFav'];
        $query="DELETE FROM `personfavoritegame` WHERE `personEmail`='$email' AND `gamename`='$game' ";

        if ($result=mysqli_query($DataBase,$query)){

            echo '1';
        }


    }
    else echo'not here';
} else echo 'nothing';

?>