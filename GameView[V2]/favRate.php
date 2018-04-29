<?php

if (!isset($_SESSION['checkfavRate'])) {
    session_start();
}
include_once "../login/dbh.php";

if(isset($_SESSION['email'])) {

    if (isset($_SESSION['name'])) {

        $email = $_SESSION['email'];
        $name = $_SESSION['name'];

        $query = "SELECT  `Id` FROM `personfavoritegame` WHERE `gamename`='$name' AND `personEmail`='$email'";
        if ($result = mysqli_query($DataBase, $query)) {
            //$row = mysqli_fetch_assoc($result);
            $count = 0;
            while (($row = mysqli_fetch_assoc($result))) {
                $count++;
            }

            if(1){
                echo ' <img id ="favoriteicon"  class="float-right" src="assets/img/icons8-rating-40.png" data-bs-hover-animate="rubberBand" style="margin-top:15px;cursor:pointer;"></div> ';

            }
            else{
                echo ' <img id ="favoriteicon"  class="float-right" src="assets/img/icons8-rating-41.png" data-bs-hover-animate="rubberBand" style="margin-top:15px;cursor:pointer;"></div> ';

            }
        }


    }
}else echo "no fav";


?>