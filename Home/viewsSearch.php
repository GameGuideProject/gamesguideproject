<?php


session_start();
include_once "../login/dbh.php";


$query="SELECT `name`,`Short description`, `Icon`, `BackGround` FROM `game` WHERE 1 ORDER By `numberofViews` DESC";

$gameSearchNames=new ArrayObject();
$gameSearchIcons=new ArrayObject();
$gameSearchdescrption=new ArrayObject();
$gameSearchBackGround=new ArrayObject();
$count=0;
//echo $query;
if ($result=mysqli_query($DataBase,$query)){

  //  print_r($result);



    while ($row=mysqli_fetch_assoc($result)){

        $gameSearchNames->append($row['name']);
        $gameSearchdescrption->append($row['Short description']);
        $gameSearchIcons->append($row['Icon']);
        $gameSearchBackGround->append($row['BackGround']);
        $count++;
    }

    $_SESSION['gameSearchNames']=$gameSearchNames;
    $_SESSION['gameSearchdescrption']=$gameSearchdescrption;
    $_SESSION['gameSearchIcons']=$gameSearchIcons;
    $_SESSION['gameSearchBackGround']=$gameSearchBackGround;
    $_SESSION['gameSearchCount']=$count;
   // echo $count;

    /*
        print_r($gameSearchNames);
        print_r($gameSearchdescrption);
        print_r($gameSearchBackGround);
        print_r($gameSearchIcons);
    */
}



?>