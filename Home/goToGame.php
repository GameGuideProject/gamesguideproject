<?php

session_start();
include_once "../login/dbh.php";

if (isset( $_POST['value']))
{
    $value = $_POST['value'];

    $query ="SELECT `name`, `description`, `rating`, `numberofViews`, `agerequired`, `company`, `releasedDate`,  `numberofplayers`,  `Icon`, `BackGround` FROM `game` WHERE `name`='$value'";
    $query1="SELECT `downloadurl` FROM `gamedownloadlinks` WHERE `name`='$value'";
    $query2="SELECT `type` FROM `gamelisttype` WHERE `name`='$value'";
    $query3="SELECT  `photo` FROM `gamephotolist` WHERE `name`='$value'";
    $query4="SELECT  `Platform` FROM `gameplatforms` WHERE `name`='$value'";
    $query5="SELECT  `videoUrl` FROM `gamevideolist` WHERE `name`='$value'";

   /* echo $query;
    echo '<br>';

    echo $query1;
    echo '<br>';

    echo $query2;
    echo '<br>';

    echo $query3;
    echo '<br>';

    echo $query4;
    echo '<br>';

    echo $query5;
    echo '<br>';
*/
   if ($games=mysqli_query($DataBase,$query)){

       $gamesrows=mysqli_fetch_assoc($games);
       //print_r($gamesrows);

       $_SESSION['game']=$gamesrows['name'];
       $_SESSION['name']=$gamesrows['name'];
       $_SESSION['company']=$gamesrows['company'];
       $_SESSION['rleaseDate']=$gamesrows['releasedDate'];
       $_SESSION['playerNum']=$gamesrows['numberofplayers'];
       $_SESSION['views']=$gamesrows['numberofViews'];
       $_SESSION['ratting']=$gamesrows['rating'];
      // $_SESSION['Downlink']=downloadurl;
       $_SESSION['Age']=$gamesrows['agerequired'];
       $_SESSION['description']=$gamesrows['description'];

       $_SESSION['image1']=$gamesrows['BackGround'];
       $_SESSION['icon']=$gamesrows['Icon'];

       $views= $_SESSION['views']+1;
       $_SESSION['views']=$views;
       $game= $_SESSION['name'];

       if (isset($_POST['check'])) {

           if ($_POST['check']==0) {
               $_POST['check']=2;
               $query6 = "UPDATE `game` SET `numberofViews`='$views' WHERE `name`='$game'";

               if (mysqli_query($DataBase, $query6)) {
               }
           }
       }
      // echo '<img src="data:image/jpeg;base64,' .base64_encode($_SESSION['image1']).'" >';

       //$_SESSION['video']=$video;

       //print_r($games);

       if ($downlinks=mysqli_query($DataBase,$query1)){

           $downrows=mysqli_fetch_assoc($downlinks);
          // print_r($downrows);
           $_SESSION['Downlink']=$downrows['downloadurl'];


          // print_r($downlinks);

           if ($types=mysqli_query($DataBase,$query2)){





               $typearray=new ArrayObject();


               while ($typesrows=mysqli_fetch_assoc($types)){
                   $typearray->append($typesrows['type']);
               }

               $_SESSION['type']=$typearray;

             //  print_r($typearray);
              // for ($typesrows.count)


              // print_r($types);

               if ($photos=mysqli_query($DataBase,$query3)){

                   $photorows=mysqli_fetch_assoc($photos);
                   $_SESSION['image2']=$photorows['photo'];
                   $photorows=mysqli_fetch_assoc($photos);
                   $_SESSION['image3']=$photorows['photo'];
                   $photorows=mysqli_fetch_assoc($photos);
                   $_SESSION['image4']=$photorows['photo'];

                   //print_r($gamesrows);

                 //  print_r($photos);

                   if ($platforms=mysqli_query($DataBase,$query4)){


                       $platarray=new ArrayObject();
                       while ($platformssrows=mysqli_fetch_assoc($platforms)){
                           $platarray->append($platformssrows['Platform']);
                       }

                       $_SESSION['platform']=$platarray;

                       //print_r($gamesrows);

                      // print_r($platforms);

                       if ($videourl=mysqli_query($DataBase,$query5)){

                           $videourls=mysqli_fetch_assoc($games);

                           $_SESSION['video']=$videourls['videoUrl'];


                           //header("Location: ../GameView[V2]/gameview.php");
                           //print_r($gamesrows);

                          // print_r($videourl);

                       }
                   }
               }
           }
       }

   }





}

?>