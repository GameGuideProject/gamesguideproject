<?php
if (!isset($_SESSION['checkfavRate'])) {
    session_start();
}
include_once "../login/dbh.php";

if(isset($_SESSION['email1'])) {

    if (isset($_SESSION['name'])) {

        $email = $_SESSION['email1'];
        $name = $_SESSION['name'];

        $query="SELECT `Id`, `gamename` FROM `personfavoritegame` WHERE `personEmail` ='$email'";


        if($result=mysqli_query($DataBase,$query)){

            $i=0;


            while($row=mysqli_fetch_assoc($result)){

                $id=$row['Id'];
                $gameName=$row['gamename'];

                echo '  <div>
                 <div  id="'."a".$i.'"class="row" data-aos="fade-down" data-aos-duration="200" style="background:rgba(191,191,191,0.62);padding-top:3px;padding-bottom:3px;height:100%;">
                <div  class="col-lg-1" style="height:100%;width:20%;"><img src="assets/img/icons8-rating-40.png" data-bs-hover-animate="swing" style="margin-top:10px;"></div>
                <div class="col-lg-6" style="padding-top:3px;height:100%;width:80%;"><label id="'."-".$i.'" class="col-form-label" style="font-size:20px;margin-left:0px;padding-left:0px;text-shadow:2px 2px 8px rgba(34,34,34,0.9);margin-top:5px;padding-bottom:9px;">'.$gameName.'</label></div>
                <div class="col-lg-4 ml-auto" style="padding-left:5px;padding-right:5px;height:100%;margin-right:0px;padding-top:5px;padding-bottom:5px;margin-left:0px;width:100%;">
                    <div class="row" style="height:52px;margin-left:0px;margin-right:0px;width:100%;">
                        <div class="col-lg-8" style="height:100%;padding-right:0px;padding-left:0px;width:70%;"><button id="'.$i.'" class="btn btn-dark btn-lg goToGame" type="button" style="width:100%;height:100%;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;border-radius:0px;background-color:rgb(43,48,52);">Go To Game</button></div>
                        <div
                            class="col-lg-4" style="height:100%;padding-left:0px;padding-right:0px;border-radius:0px;width:30%;"><button id="'."+".$i.'" class="btn btn-danger btn-lg , remove" type="button" style="width:100%;height:100%;padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;border-radius:0px;background-color:#aa1624;">Remove</button></div>
                    </div>
                </div>
            </div>
            </div>
            
            <script type="text/javascript">
            
            goRemove();
            
           </script>
            
            ';

                $i++;
            }

        }
    }


}
?>