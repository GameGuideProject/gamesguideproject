<?php

session_start();

include_once "../login/dbh.php";


if (isset($_SESSION['game'])) {

    if (isset($_SESSION['email'])) {

        if (isset($_POST['rate1'])) {
            $game = $_SESSION['game'];
            $email = $_SESSION['email'];
            $rate = $_POST['rate1'];

            if ($rate>-1){


                $query="SELECT   `id` FROM `personrating` WHERE `gamename`='$game' AND`personemail`='$email'";

                if ($result=mysqli_query($DataBase,$query)){
                    $row=mysqli_fetch_assoc($result);
                    if ($row['id']>0){

                        $query="UPDATE `personrating` SET `rate`='$rate' WHERE `gamename`= '$game' AND`personemail`= '$email' ";

                        if(mysqli_query($DataBase,$query)){

                          //  echo " rate is udated";
                        }

                    }
                    else {


                        $query="INSERT INTO `personrating`(`rate`, `gamename`, `personemail`) VALUES ('$rate','$game','$email')";

                        if(mysqli_query($DataBase,$query)){
                           // echo " rate is added";
                        }
                        else {
                           // echo "nothing";
                        }

                    }
                }





        }

        }
    }
}

?>