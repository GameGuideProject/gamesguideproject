<?php

$host='localhost';
$name='root';
$password='';
$DBName='gamesguideproject';

$DataBase = mysqli_connect($host,$name,$password,$DBName) ;
#$DataBase = new mysqli($host,$name,$password,$DBName) ;
#or die("unable to connect");
#echo 'good connections';




?>