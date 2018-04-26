<?php
session_start();

include_once "../login/dbh.php";


       if (isset($_SESSION['game'])) {

           if (isset($_SESSION['email'])) {

               if (isset($_POST['flag'])) {
                   $game = $_SESSION['game'];
                   $email = $_SESSION['email'];
                   $flag = $_POST['flag'];

                   echo $game;
                   echo '<br>';

                   echo $email;
                   echo '<br>';

                   echo $flag;
                   echo '<br>';

                   if ($flag == 1) {

                       $query = "INSERT INTO `personfavoritegame`(`gamename`, `personEmail`) VALUES ( '$game' , '$email' )";

                       if (mysqli_query($DataBase, $query)) {
                           echo"done adding";
                       }else echo 'nothing added';

                   }
                   else if($flag==-1){
                       $query = "DELETE FROM `personfavoritegame` WHERE `gamename`= '$game' AND `personEmail` = '$email'";

                       if (mysqli_query($DataBase, $query)) {
                           echo"done deleting";
                       }else echo 'nothing deleted';

                   }
                   else echo$flag;

               }else {
                   echo "flag in null";
               }
           }
           else {
               echo "email is null";
           }

       }else {
           echo "game is null";
       }


          /* else if ($flag==-1) {
               $query = "DELETE FROM `personfavoritegame` WHERE `gamename`= '$game' AND `personEmail` = '$email'";
           }

           if(mysqli_query($DataBase,$query)){
               echo 'done';
           }
           else {
               echo 'nothing';
           }*/


?>