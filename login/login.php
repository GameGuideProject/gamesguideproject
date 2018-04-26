<?php

session_start();
include_once "dbh.php";

if(isset($_POST['submit'])) {

    if (!(empty($_POST['pass']) || empty($_POST['email']))) {

        $pass = mysqli_real_escape_string($DataBase, $_POST['pass']);
       $email = mysqli_real_escape_string($DataBase, $_POST['email']);

        $pass = sha1($pass);


       $query= "SELECT `Email`, `Password`, `Photo`, `Name`, `Admin Flag`, `User Flag`, `verified` FROM `person` WHERE `Email`= '$email' AND `Password` = '$pass'";


     #  echo $query;
      # echo '<br>';

        if ($result = mysqli_query($DataBase, $query)) {


            $row = mysqli_fetch_array($result);
       #     print_r($row);
            $_SESSION['check'] = 0;
            if (isset($row['Name'])){
            $username = $row['Name'];
            $flag= $row['Admin Flag'];
            $flag1= $row['User Flag'];
            $_SESSION['admin_flag']=$flag;
            $_SESSION['username'] = $username;
            $_SESSION['check'] = 1;
            $_SESSION['email']=$email;



            header("Location: ../Project/Home.php");
            exit;
            }

        }


    }
    else {
        $_SESSION['pass/email']="true";
       # header('Location: index.html');
    }
}

header('Location: index.html');
exit;
?>