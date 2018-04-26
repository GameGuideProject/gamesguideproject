
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


        $( "#write" ).load( "addRate.php" ,{rate1:rate}, function(data) {

            $("#write").html(data);
            alert(data);

        });

       // $("#write").innerHTML="";

    })
});


