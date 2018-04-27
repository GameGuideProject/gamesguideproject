var ImageSelect,ImageIndexNonSelect;
var Imagestate;
var Interval;


function Build() {
    ReadImage();
    Interval= setInterval(ChangImageView,7000);
    Imagestate=1;
}




function ReadImage() {
    ImageSelect="Image/Icon/ImageIndexSelect.png";
    ImageIndexNonSelect="Image/Icon/ImageIndexNonSelect.png";
}

function setFirstImage(ImageView,ImagePressed,secondImage,ThirdImage){
    Home1=document.getElementById('ImageView1');
    Home2=document.getElementById('ImageView2');
    Home3=document.getElementById('ImageView3');
    Home2.style.display="none";
    Home3.style.display="none";
    Home1.style.display="block";
    ImagePressed.src=ImageSelect;
    secondImage.src=ImageIndexNonSelect;
    ThirdImage.src=ImageIndexNonSelect;
    Imagestate=1;
    clearInterval(Interval);
    Interval= setInterval(ChangImageView,10000);
}


function setSecondImage(ImageView,ImagePressed,secondImage,ThirdImage){
    Home1=document.getElementById('ImageView1');
    Home2=document.getElementById('ImageView2');
    Home3=document.getElementById('ImageView3');
    Home2.style.display="block";
    Home3.style.display="none";
    Home1.style.display="none";
    ImagePressed.src=ImageSelect;
    secondImage.src=ImageIndexNonSelect;
    ThirdImage.src=ImageIndexNonSelect;
    Imagestate=2;
    clearInterval(Interval);
    Interval= setInterval(ChangImageView,10000);
}


function setThirdImage(ImageView,ImagePressed,secondImage,ThirdImage){
    Home1=document.getElementById('ImageView1');
    Home2=document.getElementById('ImageView2');
    Home3=document.getElementById('ImageView3');
    Home3.style.display="block";
    Home2.style.display="none";
    Home1.style.display="none";
    ImagePressed.src=ImageSelect;
    secondImage.src=ImageIndexNonSelect;
    ThirdImage.src=ImageIndexNonSelect;
    Imagestate=3;
    clearInterval(Interval);
    Interval= setInterval(ChangImageView,10000);
}

function ChangImageView() {
    ImageTemp=new Image();
    ImageTemp.src=ImageSelect;
    first= document.getElementById('FirstPointSelecterImage');
    second= document.getElementById('SecondPointSelecterImage');
    third=document.getElementById('ThirdPointSelecterImage');
    Home1=document.getElementById('ImageView1');
    Home2=document.getElementById('ImageView2');
    Home3=document.getElementById('ImageView3');
   if(Imagestate==1){
       Home2.style.display="block";
       Home3.style.display="none";
       Home1.style.display="none";
       first.src=ImageIndexNonSelect;
       second.src=ImageSelect;
       third.src=ImageIndexNonSelect;

       Imagestate=2;
   }else if(Imagestate==2){
       Home3.style.display="block";
       Home2.style.display="none";
       Home1.style.display="none";
       first.src=ImageIndexNonSelect;
       second.src=ImageIndexNonSelect;
       third.src=ImageSelect;

       Imagestate=3;
   }else{
       Home1.style.display="block";
       Home3.style.display="none";
       Home2.style.display="none";
       first.src=ImageSelect;
       second.src=ImageIndexNonSelect;
       third.src=ImageIndexNonSelect;

       Imagestate=1;
   }
}



function getGameName(){
   var t= "ImageName"+Imagestate;
    return document.getElementById(t).innerText;

}

function LoadPageGame(){
    var  GameName= getGameName();
    /*your code  ^_^ (وصبر لحكم ربك) (تشجع الطريق تنتهي حين تبدأ)*/





}

