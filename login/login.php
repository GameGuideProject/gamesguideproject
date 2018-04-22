<?php

session_start();
include_once "dbh.php";

if(isset($_POST['submit'])) {

    if (!(empty($_POST['pass']) || empty($_POST['email']))) {

        $pass = mysqli_real_escape_string($DataBase, $_POST['pass']);
        $email = mysqli_real_escape_string($DataBase, $_POST['email']);
        $pass = sha1($pass);


        $query = "SELECT * FROM `person` WHERE `Email`='$email' AND `Password` ='$pass'";
        if ($result = mysqli_query($DataBase, $query)) {

            $row = mysqli_fetch_array($result);
            $username = $row['Name'];

            $_SESSION['username'] = $username;
            $_SESSION['check']=1;

            header("Location: ../Project/home.php");
            exit;
        }



    } else {
       # header('Location: index.html');
    }
}

header('Location: index.html');
exit;
?>