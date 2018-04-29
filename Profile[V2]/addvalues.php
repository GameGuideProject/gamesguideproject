<?php

if (!isset($_SESSION['checkfavRate'])) {
    session_start();
}
include_once "../login/dbh.php";

if(isset($_SESSION['email'])) {

    if (isset($_SESSION['username'])) {

        $email = $_SESSION['email'];
        $name = $_SESSION['username'];

        $query="SELECT COUNT(*) FROM `generallike` WHERE `personEmail`='$email' AND `likeC`=1";
        $query1="SELECT COUNT(*)  FROM `generallike` WHERE `personEmail`='$email' AND `dislike`=1";
        $query2="SELECT COUNT(*) FROM `personfavoritegame` WHERE `personEmail`='$email'";
        $query3="SELECT COUNT(*) FROM `comment` WHERE `username`='$name'";

        if($result=mysqli_query($DataBase,$query)){

            $row=mysqli_fetch_assoc($result);

            if($result1=mysqli_query($DataBase,$query1)) {

                $row1 = mysqli_fetch_assoc($result1);

                if($result2=mysqli_query($DataBase,$query2)) {

                    $row2 = mysqli_fetch_assoc($result2);


                    if($result3=mysqli_query($DataBase,$query3)) {

                        $row3 = mysqli_fetch_assoc($result3);


echo '   
   <div class="col" style="padding-left:0px;width:25%;height:100%;padding-right:0px;">
                    <div class="row" data-aos="fade-up" data-aos-duration="300" data-aos-delay="150" data-aos-once="true" style="margin-right:0px;padding-right:0px;padding-left:40%;margin-top:16px;width:100%;margin-left:0px;">
                        <div class="col-lg-6" style="padding-left:0px;padding-right:0px;"><img src="assets/img/icons8-heart-40.png" data-bs-hover-animate="rubberBand" style="padding-bottom:0px;padding-top:0px;margin-top:0px;cursor:pointer;"></div>

    <div class="col-lg-7" style="padding-left:0px;padding-right:0px;"><label class="col-form-label" id="Like" style="padding-top:0px;padding-left:0px;font-size:22px;padding-bottom:0px;"><strong><pre style="text-align: center "> '.$row['COUNT(*)'].'</pre></strong></label></div></div>
</div>
<div class="col-lg-3" style="padding-left:0px;width:25%;height:100%;padding-right:0px;">
    <div class="row" data-aos="fade-up" data-aos-duration="300" data-aos-delay="250" data-aos-once="true" style="margin-right:0px;padding-right:0px;padding-left:40%;margin-top:16px;width:100%;margin-left:0px;">
        <div class="col-lg-6" style="padding-left:0px;padding-right:0px;width:100%;"><img src="assets/img/icons8-skull-40.png" data-bs-hover-animate="rubberBand" style="padding-bottom:0px;padding-top:0px;margin-top:0px;cursor:pointer;"></div>

        <?php

             <div class="col-lg-7" style="padding-left:0px;padding-right:0px;"><label class="col-form-label" id="DisLike" style="padding-top:0px;padding-left:0px;font-size:22px;padding-bottom:0px;"><strong><pre> '.$row1['COUNT(*)'].'</pre></strong></label></div>
        

    </div>
</div>
<div class="col" style="padding-left:0px;width:25%;height:100%;padding-right:0px;">
    <div class="row" data-aos="fade-up" data-aos-duration="300" data-aos-delay="350" data-aos-once="true" style="margin-right:0px;padding-right:0px;padding-left:40%;margin-top:16px;margin-left:0px;">
        <div class="col-lg-6" style="padding-left:0px;padding-right:0px;"><img src="assets/img/icons8-chat-bubble-40.png" data-bs-hover-animate="tada" style="padding-bottom:0px;padding-top:0px;margin-top:0px;cursor:pointer;"></div>

        

             <div class="col-lg-7" style="padding-left:0px;padding-right:0px;"><label class="col-form-label" id="Comment" style="padding-top:0px;padding-left:0px;font-size:22px;padding-bottom:0px;"><strong><pre> '.$row3['COUNT(*)'].'</pre></strong></label></div>
       


    </div>
</div>
<div class="col" style="padding-left:0px;width:25%;height:100%;padding-right:0px;">


    <div class="row" data-aos="fade-up" data-aos-duration="300" data-aos-delay="450" data-aos-once="true" style="margin-right:0px;padding-right:0px;padding-left:40%;margin-top:16px;width:100%;margin-left:0px;">
        <div class="col-lg-6" style="padding-left:0px;padding-right:0px;"><img src="assets/img/icons8-rating-40.png" data-bs-hover-animate="swing" style="padding-bottom:0px;padding-top:0px;margin-top:0px;cursor:pointer;"></div>

        
           <div class="col-lg-7" style="padding-left:0px;padding-right:0px;"><label class="col-form-label" id="Favorite" style="padding-top:0px;padding-left:0px;font-size:22px;padding-bottom:0px;"><strong> <pre>'.$row2['COUNT(*)'].'</pre></strong></label></div>
              

    </div>
</div>';

                    }

                }


            }


        }


    }
}
?>