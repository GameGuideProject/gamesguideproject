var rate=-1;

var i1="Star1";
var i2="Star2";
var i3= "Star3";
var i4= "Star4";
var i5="Star5";
var B="SubmitRateButton";
var T="RateText";

function LoadTo2(obj1,obj2) {
    obj2.src=obj1.src;
}
function Loadfrom1(){
    LoadTo2(document.getElementById("Image1"),document.getElementById("GameSuperView"));
   /* var img=document.getElementById("image1");
    var img1=document.getElementById("GameSuperView");
img1.src=img.src;
*/}
function Loadfrom2(){
    var img=document.getElementById("Image2");
    var img1=document.getElementById("GameSuperView");
    img1.src=img.src;
}
function Loadfrom3(){
    var img=document.getElementById("Image3");
    var img1=document.getElementById("GameSuperView");
    img1.src=img.src;
}
function Loadfrom4(){
    var img=document.getElementById("Image4");
    var img1=document.getElementById("GameSuperView");
    img1.src=img.src;
}
function get(S){
    return document.getElementById(S);
}

function SetClose55(B){
    get(B).setAttribute("disabled", true);

}

function Image1(){
   rate=1;



    get(B).removeAttribute("disabled");
    get(T).innerHTML="Hated it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/draw.png";
    get(i3).src="assets/img/draw.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";
}

function Image2(){


    rate=2;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Disliked it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/draw.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";

}

function Image3(){


    rate=3;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="It's OK";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";

}


function Image4(){


    rate=4;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Liked it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/fill.png";
    get(i5).src="assets/img/draw.png";

}

function Image5(){
    var i1="Star1";
    var i2="Star2";
    var i3= "Star3";
    var i4= "Star4";
    var i5="Star5";
    var B="SubmitRateButton";
    var T="RateText";

    rate=5;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Loved it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/fill.png";
    get(i5).src="assets/img/fill.png";
}



$(document).ready(function(){
    $("#favoriteicon").click(function(){
        var img = document.getElementById("favoriteicon");


        var flag=0;
        if(img.getAttribute('src')=="assets/img/icons8-rating-41.png"){

            img.src = "assets/img/icons8-rating-40.png";
            flag=1;

        }
        else if(img.getAttribute('src')=="assets/img/icons8-rating-40.png"){

            img.src = "assets/img/icons8-rating-41.png";
            flag=-1;

        }


        $( "#write" ).load( "favorite.php" ,{flag : flag}, function(data) {
            $("#write").html(data);
           // alert(data);
        });




    });
});

$(document).ready(function() {
    $('#SubmitRateButton').click(function () {


        $( "#printRate" ).load( "addRate.php" ,{rate1 : rate}, function(data) {

           // $("#printRate").html(data);


           // alert(data);



        });

       // $("#write").innerHTML="";

    })
});

function post( ) {

    var text= $('#TextArea1').val();
    //alert(text)
//alert(text);
    //var html=$('#commentField').html();
   // alert(html);

    $.ajax({
        type: 'POST',
        url: 'addComment.php',
        data: {text1: text},
        success: function (data) {
           // $('#commentField').empty();
            $('#commentField').load("addComment.php");
            // alert(1);
            //       alert(data);
            //window.location.href = "../GameView[V2]/gameview.php";
        }
    });





        //$("#commentField").before(' <div class="row" data-aos="fade-down" style="/*height:260px;*/"><div class ="col" style="background-color:#e0e0e0;height:100%;margin-top:30px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.52), 0 6px 20px 0 rgba(0,0,0,0.35);">            <div class ="row" style="/*background-color:#eaeaea;*/height:251px;">            <div class ="col" style="height:100%;">            <div class="row" style="margin-top:18px;margin-left:0px;"><label id ="tmp" data-aos="flip-up" data-aos-delay="250" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-male-user-filled-50.png" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">ZaidHabiba</label>            <div        class="col"><img class="float-right" src="assets/img/icons8-menu-40.png" style="cursor:pointer;"></div>            </div>            <div class="row" style="height:100px;margin-right:0px;margin-bottom:0px;">            <div  class="col-lg-12" style="padding-right:0px;height:100%;"><textarea  style="width:100%;height:100%;padding:0px 0px;box-sizing:border-box;border:2px solid rgba(204,204,204,0);border-radius:4px;background-color:rgba(248,248,248,0);font-size:16px;resize:none;text-shadow:2px 2px 8px rgba(41,41,41,0.6);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;"        readonly="">  </textarea></div>            </div>            <div class="row" style="height:64px;margin-right:0px;margin-bottom:0px;">            <div class="col-lg-12" style="padding-right:0px;height:60px;margin-top:5px;"><img src="assets/img/icons8-heart-40.png" data-bs-hover-animate="tada" style="cursor:pointer;"><label class="col-form-label" style="margin-left:10px;margin-top:10px;">0</label><img src="assets/img/icons8-skull-40.png" data-bs-hover-animate="tada" style="margin-left:30px;cursor:pointer;">            <label        class="col-form-label" style="margin-left:10px;margin-top:10px;">0</label>            </div>            </div>            </div>            </div>           </div>            </div>' );
        //alert(data);





}


$(document).ready(function() {
    $(".like").click(function () {

        var x = this.id;
        var z = x;
        var ID = z.replace('a', '');
        var Dis = z.replace('a', "b");
        var flag = 0;

        var img = document.getElementById(x);
        var img2 = document.getElementById(Dis);

        if (img.getAttribute('src') === "assets/img/icons8-heart-41.png") {


            img.src = "assets/img/icons8-heart-40.png";

            if (img2.getAttribute('src') === "assets/img/icons8-skull-41.png") {
                flag = 1;

            }
            else if (img2.getAttribute('src') === "assets/img/icons8-skull-40.png") {

                img2.src = "assets/img/icons8-skull-41.png";
                flag = 2;

            }


        }
        else if (img.getAttribute('src') === "assets/img/icons8-heart-40.png") {

            img.src = "assets/img/icons8-heart-41.png";
            flag = 3;

        }

        $.ajax({
            type: 'POST',
            url: 'addLike.php',
            data: {likeFlag: flag, ID: ID},
            success: function (data) {
                // $('#commentField').empty();
                alert(data);
                // alert(1);
                //       alert(data);
                //window.location.href = "../GameView[V2]/gameview.php";
            }
        });
    });
});

$(document).ready(function(){
    $(".dislike").click(function(){

        var x=this.id;
        var z=x;
        var ID= z.replace('b','');
        var Dis=z.replace('b',"a");
        var flag=0;

        var img=document.getElementById(x);
        var img2=document.getElementById(Dis);

        if (img.getAttribute('src')==="assets/img/icons8-skull-41.png"){


            img.src="assets/img/icons8-skull-40.png";

            if(img2.getAttribute('src')==="assets/img/icons8-heart-41.png"){
                flag=1;

            }
            else if(img2.getAttribute('src')==="assets/img/icons8-heart-40.png"){

                img2.src="assets/img/icons8-heart-41.png";
                flag=2;

            }


        }
        else  if (img.getAttribute('src')==="assets/img/icons8-skull-40.png"){

            img.src="assets/img/icons8-skull-41.png";
            flag=3;

        }
        alert(flag);
        $.ajax({
            type: 'POST',
            url: 'addDis.php',
            data: {likeFlag: flag ,ID:ID},
            success: function (data) {
                // $('#commentField').empty();
                alert(data);
                // alert(1);
                //       alert(data);
                //window.location.href = "../GameView[V2]/gameview.php";
            }
        });




        /*
         var img = document.getElementById("favoriteicon");


         var flag=0;
         if(img.getAttribute('src')=="assets/img/icons8-rating-41.png"){

         img.src = "assets/img/icons8-rating-40.png";
         flag=1;

         }
         else if(img.getAttribute('src')=="assets/img/icons8-rating-40.png"){

         img.src = "assets/img/icons8-rating-41.png";
         flag=-1;

         }


         $( "#write" ).load( "favorite.php" ,{flag : flag}, function(data) {
         $("#write").html(data);
         // alert(data);
         });


         */

    });
});



//$(document).ready(function() {
  ///  $('#addcomment').click(function () {


     //   var text = $('#TextArea').val();
       // alert(text);


        //$("#write").load("addComment.php", {text1: text}, function (data) {

          //  $("#write").html(data);
           // alert(data);


        //$("#write").innerHTML = "";
   // });

   // });



