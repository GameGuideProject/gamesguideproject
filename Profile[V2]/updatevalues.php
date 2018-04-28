<?php

session_start();
include_once "../login/dbh.php";
if (isset($_SESSION['username'])) {

    if (isset($_POST['name'])) {

        if (isset($_POST['email'])) {

            $email= $_POST['email'];
            $name= $_POST['name'];
            $email1=$_SESSION['email'];
            //$email1="ayman132@hotmail.com";
            $name1=$_SESSION['username'];
            $query="UPDATE `person` SET `Email`='$email',`Name`='$name' WHERE `Email`='$email1'";
            $query1="UPDATE `personfavoritegame` SET `personEmail`='$email' WHERE `personEmail`='$email1'";
            $query2="UPDATE `personrating` SET `personemail`='$email' WHERE `personemail`='$email1'";
            $query3="UPDATE `comment` SET `username`='$name' WHERE `username`='$name1'";
            $query4=" UPDATE `generallike` SET`personEmail`='$email' WHERE `personEmail`='$name1'";

//echo $query;
//echo '<br>';

            if (mysqli_query($DataBase,$query)){

                $_SESSION['email']=$email;

                $_SESSION['username']=$name;

  //              echo $query;
    //            echo '<br>';
               if(mysqli_query($DataBase,$query1)){
      //             echo $query1;
        //           echo '<br>';
                   if(mysqli_query($DataBase,$query2)){
          //             echo $query2;
            //           echo '<br>';
                       if (mysqli_query($DataBase,$query3)){
              //             echo $query3;
                //           echo '<br>';
                           if(mysqli_query($DataBase,$query4)){
                  //             echo $query4;
                    //           echo '<br>';
                           }
                           else echo -5;
                       }
                       else echo -4;
                   }
                   else echo  -3;
               }
               else echo -2;

            }else echo 'nothing';

        }
    }

}
?>