<?php


session_start();
include_once "../login/dbh.php";

if (isset($_POST['value'])) {
    $value=$_POST['value'];
    $query = "SELECT DISTINCT `game`.`name` ,`Short description`, `Icon`, `BackGround` FROM `game`,`gamelisttype` WHERE  `gamelisttype`.`type`='$value'  And `game`.`name`= `gamelisttype`.`name`";

    $gameSearchNames = new ArrayObject();
    $gameSearchIcons = new ArrayObject();
    $gameSearchdescrption = new ArrayObject();
    $gameSearchBackGround = new ArrayObject();
    $count = 0;
    if ($result = mysqli_query($DataBase, $query)) {



        while ($row = mysqli_fetch_assoc($result)) {

            $gameSearchNames->append($row['name']);
            $gameSearchdescrption->append($row['Short description']);
            $gameSearchIcons->append($row['Icon']);
            $gameSearchBackGround->append($row['BackGround']);
            $count++;
        }


        /*
            print_r($gameSearchNames);
            print_r($gameSearchdescrption);
            print_r($gameSearchBackGround);
            print_r($gameSearchIcons);
        */
    }

    $_SESSION['gameSearchNames'] = $gameSearchNames;
    $_SESSION['gameSearchdescrption'] = $gameSearchdescrption;
    $_SESSION['gameSearchIcons'] = $gameSearchIcons;
    $_SESSION['gameSearchBackGround'] = $gameSearchBackGround;
    $_SESSION['gameSearchCount'] = $count;
}

?>