<?php

session_start();
include_once "../login/dbh.php";




if (isset($_POST['opass'])) {
    if (isset($_POST['npass'])) {
        if (isset($_POST['rep'])) {
            if (isset($_SESSION['email'])) {
                if ($_POST['npass'] == $_POST['rep']) {
                    $_SESSION['pass1'] = sha1($_SESSION['pass']);
                    $pass = $_SESSION['pass1'];
                    $email = $_SESSION['email'];
                    $newPass = sha1($_POST['npass']);
                    $query = "UPDATE `person` SET`Password`='$newPass' WHERE `Password`='$pass' AND `Email`='$email'";

                    echo $query;
                    if (mysqli_query($DataBase,$query)){
                        //echo 'updated';
                    }
                    //else echo 'nothing';

                }
            }
        }
    }
}
?>