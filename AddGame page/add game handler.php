<?php

session_start();
include_once "../login/dbh.php";




    /* $image1=mysqli_real_escape_string($DataBase,$_POST['image1']);
     $image2=mysqli_real_escape_string($DataBase,$_POST['image2']);
     $image3=mysqli_real_escape_string($DataBase,$_POST['image3']);
     $image4=mysqli_real_escape_string($DataBase,$_POST['image4']);
     $icon=mysqli_real_escape_string($DataBase,$_POST['icon']);

     $image1=mysqli_real_escape_string($DataBase,$_FILES['image1']);
     $image2=mysqli_real_escape_string($DataBase,$_FILES['image2']);
     $image3=mysqli_real_escape_string($DataBase,$_FILES['image3']);
     $image4=mysqli_real_escape_string($DataBase,$_FILES['image4']);
     $icon=mysqli_real_escape_string($DataBase,$_FILES['icon']);
     */
    if (isset($_POST['submit'])) {

        $name = mysqli_real_escape_string($DataBase, $_POST['GameName']);
        $CompanyName = mysqli_real_escape_string($DataBase, $_POST['CompanyName']);
        $DownLink = mysqli_real_escape_string($DataBase, $_POST['DownLink']);
        $RleaseDate = mysqli_real_escape_string($DataBase, $_POST['Rlease']);
        $playerNumber = mysqli_real_escape_string($DataBase, $_POST['PlayerNum']);
        $Age = mysqli_real_escape_string($DataBase, $_POST['Age']);
        $video = mysqli_real_escape_string($DataBase, $_POST['video']);

        if (!(empty($name) || empty($CompanyName) || empty($DownLink) || empty($RleaseDate) || empty($playerNumber) || empty($Age) || empty($video))) {


            if (filter_var($video, FILTER_VALIDATE_URL) && filter_var($DownLink, FILTER_VALIDATE_URL)) {

                if (isset($_FILES['image1']) && isset($_FILES['image2']) && isset($_FILES['image3']) && isset($_FILES['image4']) && isset($_FILES['icon'])) {

                   /* echo $_FILES['image1']['type'];
                    echo $_FILES['image2']['type'];
                    echo $_FILES['image3']['type'];
                    echo $_FILES['image4']['type'];
                    echo $_FILES['icon']['type'];
*/
                    if (substr($_FILES['image1']['type'], 0, 5) == 'image' && substr($_FILES['image2']['type'], 0, 5) == 'image'
                        && substr($_FILES['image3']['type'], 0, 5) == 'image' && substr($_FILES['image4']['type'], 0, 5) == 'image' &&
                        substr($_FILES['icon']['type'], 0, 5) == 'image'
                    ) {
                        $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                        $image2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
                        $image3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
                        $image4 = addslashes(file_get_contents($_FILES['image4']['tmp_name']));
                        $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));

                        if (!(empty($image1) || empty($image2) || empty($image3) || empty($image4) || empty($icon))) {

                            $shortdes = mysqli_real_escape_string($DataBase, $_POST['shortDes']);
                            $decription = mysqli_real_escape_string($DataBase, $_POST['decription']);

                            if (!(empty($decription) || empty($shortdes))) {


                                $plat1 = '1';
                                $plat2 = '2';
                                $plat3 = '3';
                                $plat4 = '4';
                                $plat5 = '5';

                                if (isset($_POST['plat1']))
                                    $plat1 = mysqli_real_escape_string($DataBase, $_POST['plat1']);

                                if (isset($_POST['plat2']))
                                    $plat2 = mysqli_real_escape_string($DataBase, $_POST['plat2']);

                                if (isset($_POST['plat3']))
                                    $plat3 = mysqli_real_escape_string($DataBase, $_POST['plat3']);

                                if (isset($_POST['plat4']))
                                    $plat4 = mysqli_real_escape_string($DataBase, $_POST['plat4']);

                                if (isset($_POST['plat5']))
                                    $plat5 = mysqli_real_escape_string($DataBase, $_POST['plat5']);


                                if (!(empty($plat1) && empty($plat2) && empty($plat3) && empty($plat4) && empty($plat5))) {


                                    $array_pla = new ArrayObject();

                                    if ($plat1 == 'on') {

                                        $array_pla->append("PlayStation");


                                    }
                                    if ($plat2 == 'on') {
                                        $array_pla->append("Mobile");


                                    }
                                    if ($plat3 == 'on') {
                                        $array_pla->append("XBox");


                                    }
                                    if ($plat4 == 'on') {
                                        $array_pla->append("PC");


                                    }
                                    if ($plat5 == 'on') {
                                        $array_pla->append("Other");


                                    }

                                    $type0 = '9';
                                    $type1 = '8';
                                    $type2 = '7';
                                    $type3 = '6';
                                    $type4 = '10';
                                    $type5 = '11';


                                    if (isset($_POST['type0']))
                                        $type0 = mysqli_real_escape_string($DataBase, $_POST['type0']);

                                    if (isset($_POST['type1']))
                                        $type1 = mysqli_real_escape_string($DataBase, $_POST['type1']);

                                    if (isset($_POST['type2']))
                                        $type2 = mysqli_real_escape_string($DataBase, $_POST['type2']);

                                    if (isset($_POST['type3']))
                                        $type3 = mysqli_real_escape_string($DataBase, $_POST['type3']);

                                    if (isset($_POST['type4']))
                                        $type4 = mysqli_real_escape_string($DataBase, $_POST['type4']);

                                    if (isset($_POST['type5']))
                                        $type5 = mysqli_real_escape_string($DataBase, $_POST['type5']);

                                    /* echo $type0;
                                     echo $type1;
                                     echo $type2;
                                     echo $type3;
                                     echo $type4;
                                     echo $type5;
                                    */

                                    if (!(empty($type0) && empty($type1) && empty($type2) && empty($type3) && empty($type4) && empty($type5))) {

                                        $array_type = new ArrayObject();

                                        if ($type0 == 'on') {

                                            $array_type->append("Adventure");

                                        }
                                        if ($type1 == 'on') {

                                            $array_type->append("Arcade");

                                        }
                                        if ($type2 == 'on') {
                                            $array_type->append("Action");


                                        }
                                        if ($type3 == 'on') {
                                            $array_type->append("Sport");


                                        }
                                        if ($type4 == 'on') {
                                            $array_type->append("Board");


                                        }
                                        if ($type5 == 'on') {
                                            $array_type->append("Other");


                                        }

                                        parse_str( parse_url( $video, PHP_URL_QUERY ), $my_array_of_vars );

                                        if (isset($my_array_of_vars['v']))
                                            $video= $my_array_of_vars['v'];
                                        else {

                                            $my_array_of_vars=explode('/',$video);
                                            $my_array_of_vars1=new ArrayObject($my_array_of_vars);
                                            for ($i=0;$i<$my_array_of_vars1->count();$i++){
                                                $video=$my_array_of_vars1[$i];
                                            }


                                        }


                                        $currentDate = date('Y-m-d');

                                        $query = "INSERT INTO `game`(`name`, `description`, `rating`, `numberofViews`, `agerequired`, `company`, `releasedDate`, `addedDate`, `numberofplayers`, `Short description`, `Icon`, `BackGround`) VALUES ('$name','$decription','0','1','$Age','$CompanyName', '$RleaseDate','$currentDate','$playerNumber','$shortdes','$icon','$image1')";

                                        if (mysqli_query($DataBase, $query)) {
                                     #       echo "game added " ."<br>";
                                        } #else echo "game have not added"."<br>";

                                        $query1="INSERT INTO `gamedownloadlinks`(`name`, `downloadurl`) VALUES ('$name','$DownLink')";
                                        if (mysqli_query($DataBase, $query1)) {
                                          #  echo "link added"."<br>";
                                        } #else echo "link have not added"."<br>";


                                        $query2="INSERT INTO `gamevideolist`(`name`, `videoUrl`) VALUES ('$name','$video')";

                                        if (mysqli_query($DataBase, $query2)) {
                                           # echo "video added "."<br>";
                                        } #else echo "link have not added"."<br>";

                                        for ($i=0;$i<$array_type->count();$i++){
                                           $query3="INSERT INTO `gamelisttype`(`name`, `type`) VALUES ('$name','$array_type[$i]')";
                                            if (mysqli_query($DataBase, $query3)) {
                                            #    echo " $array_type[$i] added "."<br>";
                                            } #else echo "'$array_type[$i] have not added"."<br>";


                                        }
                                        for ($i=0;$i<$array_pla->count();$i++){
                                            $query3="INSERT INTO `gameplatforms`(`name`, `Platform`) VALUES ('$name','$array_pla[$i]')";
                                            if (mysqli_query($DataBase, $query3)) {
                                             #   echo " $array_pla[$i] added "."<br>";
                                            } #else echo "'$array_pla[$i] have not added"."<br>";
                                        }

                                        $query4="INSERT INTO `gamephotolist`(`name`, `photo`) VALUES ('$name','$image2')";

                                        if (mysqli_query($DataBase, $query4)) {
                                            #echo "image2 added "."<br>";
                                        } #else echo "image2 have not added"."<br>";

                                        $query4="INSERT INTO `gamephotolist`(`name`, `photo`) VALUES ('$name','$image3')";

                                        if (mysqli_query($DataBase, $query4)) {
                                            #echo "image3 added "."<br>";
                                        } #else #echo "image3 have not added"."<br>";

                                        $query4="INSERT INTO `gamephotolist`(`name`, `photo`) VALUES ('$name','$image4')";

                                        if (mysqli_query($DataBase, $query4)) {
                                            #echo "image4 added "."<br>";
                                        } #else echo "image4 have not added"."<br>";



                                        #########################
                                        #########################

                                        $_SESSION['game']=$name;
                                        $_SESSION['name']=$name;
                                        $_SESSION['company']=$CompanyName;
                                        $_SESSION['rleaseDate']=$RleaseDate;
                                        $_SESSION['playerNum']=$playerNumber;
                                        $_SESSION['views']='1';
                                        $_SESSION['ratting']='0';
                                        $_SESSION['Downlink']=$DownLink;
                                        $_SESSION['Age']=$Age;
                                        $_SESSION['description']=$decription;

                                        $_SESSION['video']=$video;

                                        $_SESSION['platform']=$array_pla;
                                        $_SESSION['type']=$array_type;


                                        $_SESSION['image1']=file_get_contents($_FILES['image1']['tmp_name']);
                                        $_SESSION['image2']=file_get_contents($_FILES['image2']['tmp_name']);
                                        $_SESSION['image3']=file_get_contents($_FILES['image3']['tmp_name']);
                                        $_SESSION['image4']=file_get_contents($_FILES['image4']['tmp_name']);
                                        $_SESSION['icon']=file_get_contents($_FILES['icon']['tmp_name']);


                                        header("Location: ../GameView[V2]/gameview.php");



                                    } else {
                                        echo 'please check on box at least';
                                    }
                                } else {
                                    echo 'please check on box at least';
                                }
                            } else {
                                echo 'please write descretion';
                            }


                        }
                     else {
                        echo ' please enter all images';
                    }
                } else {
                    echo 'please be sure that all images are images';
                }

            } else {
                echo 'please enter all images 1';
            }

        } else {
            echo 'please taht you entered video image';
        }
    }

    }

//echo $RleaseDate;
/*echo $name;
echo $CompanyName;
echo $DownLink;
echo $RleaseDate;
echo $playerNumber;
echo $Age;
echo $video;

echo $image1;
echo $image2;
echo $image3;
echo $image4;

echo $decription;

echo $plat1;
echo $plat2;
echo $plat3;
echo $plat4;
echo $plat5;

echo $type0;
echo $type1;
echo $type2;
echo $type3;
echo $type4;
echo $type5;
print_r($array_type);
print_r($array_pla);
*/
?>