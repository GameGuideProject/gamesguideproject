<?php

session_start();
include_once "dbh.php";

$name = $_POST['username'];
$Email= $_POST['email'];
$password = $_POST['password'];
$password1= $_POST['Repeat_Password'];

if (!(empty($name)||empty($Email)||empty($password)||empty($password1))){
    if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {

        if ($password == $password1) {
            #&&preg_match('~^\.{6,}~', $_POST['password'])


            $name = mysqli_real_escape_string($DataBase, $_POST['username']);

            $Email = mysqli_real_escape_string($DataBase, $_POST['email']);
            $password = mysqli_real_escape_string($DataBase, $_POST['password']);
            $password1 = mysqli_real_escape_string($DataBase, $_POST['Repeat_Password']);

            $password = sha1($password);
            $query = "INSERT INTO `person`(`Email`, `Password`, `Photo`, `Name`, `Admin Flag`, `User Flag`, `verified`) VALUES ('$Email','$password',NULL ,'$name',NULL ,'1' ,'1')";

            if (mysqli_query($DataBase, $query)) {
                $_SESSION['username'] = $name;
                $_SESSION['check']= 1;
                header("Location: ../Project/Home.php");
                exit;
            }
             else {
                 $_SESSION['check']= 0;
                 header( "Location: Register.html");
                 exit;
                #echo 'not here';
             }

        }
          else {
              $_SESSION['check']= 0;
              header( "Location: Register.html");
              exit;
            #echo"not equal";
          }
    }
else {
    $_SESSION['check']= 0;
    header( "Location: Register.html");
    exit;
        #echo 'not email';
}
}
$_SESSION['check']= 0;
header( "Location: Register.html");
exit;
?>

