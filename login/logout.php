<?php
session_start();
session_unset();
session_destroy();
$_SESSION['check']=0;
header("Location:../Home/Homeold.php");
exit;
?>