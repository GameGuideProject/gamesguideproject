<?php
session_start();

$arr=new ArrayObject();
$arr->append("darksiders");
$arr->append("darksiders2");
$_SESSION['favName']=$arr;
$count=$arr->count();
$_SESSION['favNum']=$count;

print_r($_SESSION['favName']);
$tmp=$_SESSION['favNum'].$_SESSION['favNum'];
echo $tmp;
?>