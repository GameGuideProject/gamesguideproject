var rate=-1;

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

function Image1(i1,i2,i3,i4,i5,B,T){
   rate=1;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Hated it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/draw.png";
    get(i3).src="assets/img/draw.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";
}

function Image2(i1,i2,i3,i4,i5,B,T){
    rate=2;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Disliked it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/draw.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";

}

function Image3(i1,i2,i3,i4,i5,B,T){
    rate=3;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="It's OK";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";

}


function Image4(i1,i2,i3,i4,i5,B,T){
    rate=4;
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Liked it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/fill.png";
    get(i5).src="assets/img/draw.png";

}

function Image5(i1,i2,i3,i4,i5,B,T){
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


        $( "#favoriteicon" ).load( "favorite.php" ,{flag : flag}, function(data) {
            //$("#write").html(data);
            alert(data);
        });




    });
});

$(document).ready(function() {
    $('#SubmitRateButton').click(function () {


        $( "#write" ).load( "addRate.php" ,{rate1 : rate}, function(data) {

            $("#write").html(data);


            alert(data);



        });

       // $("#write").innerHTML="";

    })
});

function post( ) {

    var text= $('#TextArea1').val();
    //alert(text)

    var html=$('#commentField').html();
   // alert(html);

    $('#commentField').load("addComment.php", {text1: text}, function (data) {


        //$("#commentField").before(' <div class="row" data-aos="fade-down" style="/*height:260px;*/"><div class ="col" style="background-color:#e0e0e0;height:100%;margin-top:30px;box-shadow:0 4px 8px 0 rgba(0,0,0,0.52), 0 6px 20px 0 rgba(0,0,0,0.35);">            <div class ="row" style="/*background-color:#eaeaea;*/height:251px;">            <div class ="col" style="height:100%;">            <div class="row" style="margin-top:18px;margin-left:0px;"><label id ="tmp" data-aos="flip-up" data-aos-delay="250" style="font-size:34px;text-shadow:2px 2px 8px rgba(53,53,53,0.96);padding-left:9px;"><img src="assets/img/icons8-male-user-filled-50.png" style="padding-top:0px;padding-left:0px;padding-bottom:5px;padding-right:20px;">ZaidHabiba</label>            <div        class="col"><img class="float-right" src="assets/img/icons8-menu-40.png" style="cursor:pointer;"></div>            </div>            <div class="row" style="height:100px;margin-right:0px;margin-bottom:0px;">            <div  class="col-lg-12" style="padding-right:0px;height:100%;"><textarea  style="width:100%;height:100%;padding:0px 0px;box-sizing:border-box;border:2px solid rgba(204,204,204,0);border-radius:4px;background-color:rgba(248,248,248,0);font-size:16px;resize:none;text-shadow:2px 2px 8px rgba(41,41,41,0.6);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;"        readonly="">  </textarea></div>            </div>            <div class="row" style="height:64px;margin-right:0px;margin-bottom:0px;">            <div class="col-lg-12" style="padding-right:0px;height:60px;margin-top:5px;"><img src="assets/img/icons8-heart-40.png" data-bs-hover-animate="tada" style="cursor:pointer;"><label class="col-form-label" style="margin-left:10px;margin-top:10px;">0</label><img src="assets/img/icons8-skull-40.png" data-bs-hover-animate="tada" style="margin-left:30px;cursor:pointer;">            <label        class="col-form-label" style="margin-left:10px;margin-top:10px;">0</label>            </div>            </div>            </div>            </div>           </div>            </div>' );
        //alert(data);


    });
    $("#commentField").after(html);

}

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



