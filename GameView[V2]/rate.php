<?php


if (!isset($_SESSION['checkfavRate'])) {
    session_start();
}
include_once "../login/dbh.php";


if(isset($_SESSION['email1'])) {

    if (isset($_SESSION['name'])) {

        $email = $_SESSION['email1'];
        $name = $_SESSION['name'];

        $query = "SELECT  `rate` FROM `personrating` WHERE `gamename`='$name' AND `personEmail`='$email'";

        if ($result = mysqli_query($DataBase, $query)) {
            //$row = mysqli_fetch_assoc($result);
            $count = 0;
            $rate=0;
            while (($row = mysqli_fetch_assoc($result))) {

                $rate=$row['rate'];
                $count++;
               // print_r($rate);
            }



                print_r($row);

                if($rate==0){

                   echo '
                    <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image1()"   style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image2()"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image3()"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image4()"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image5()"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
                ';

                }
                else if($rate==1){

                    echo '
                    <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image1()"   style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image2()"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image3()"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image4()"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image5()"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
                ';

                }

                else if($rate==2){

                    echo '
                    <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image1()"   style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image2()"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image3()"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image4()"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image5()"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
                ';

                }

                else if($rate==3){

                    echo '
                    <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image1()"   style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image2()"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/fill.png" onclick="Image3()"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image4()"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image5()"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
                ';

                }

                else if($rate==4){

                    echo '
                    <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image1()"   style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image2()"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/fill.png" onclick="Image3()"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/fill.png" onclick="Image4()"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image5()"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
                ';

                }

                else if($rate==5){

                    echo '
                    <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image1()"   style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image2()"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/fill.png" onclick="Image3()"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/fill.png" onclick="Image4()"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/fill.png" onclick="Image5()"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
                ';

                }









            }


    } else echo 'name';


} else {

    echo '
    
     <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                            <div class="col" style="width:100%;padding-right:0px;padding-left:0px;">
                                <div class="row" style="width:100%;margin-left:0px;margin-right:0px;">
                                    <div class="col-lg-4" style="width:25%;"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image1()"   style="cursor: pointer" id="Star1"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image2()"   style="cursor: pointer"  id="Star2"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image3()"   style="cursor: pointer"  id="Star3"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-left:0px;padding-right:0px;"><img src="assets/img/draw.png" onclick="Image4()"   style="cursor: pointer"  id="Star4"></div>
                                    <div class="col-lg-1" style="width:10%;padding-top:20px;padding-right:0px;padding-left:0px;"><img src="assets/img/draw.png" onclick="Image5()"   style="cursor: pointer"  id="Star5"></div>
                                    <div class="col-lg-3" style="width:25%;"></div>
                                </div>
                            </div>
                        </div>
    ';
}


?>