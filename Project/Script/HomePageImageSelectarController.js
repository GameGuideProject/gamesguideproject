var Image1,Image2,Image3,ImageSelect,ImageIndexNonSelect;
var Imagestate;
var Interval;
function Build() {
    ReadImage();
    Interval= setInterval(ChangImageView,7000);
    Imagestate=1;
}








function ReadImage() {
    Image1="Image/killzone.jpg";
    Image2="Image/2.jpg";
    Image3="Image/3.png";
    ImageSelect="Image/ImageIndexSelect.png";
    ImageIndexNonSelect="Image/ImageIndexNonSelect.png";
}

function setFirstImage(ImageView,ImagePressed,secondImage,ThirdImage){
    ImageView.src=Image1;
    ImagePressed.src=ImageSelect;
    secondImage.src=ImageIndexNonSelect;
    ThirdImage.src=ImageIndexNonSelect;
    Imagestate=1;
    clearInterval(Interval);
    Interval= setInterval(ChangImageView,10000);
}


function setSecondImage(ImageView,ImagePressed,secondImage,ThirdImage){
    ImageView.src=Image2;
    ImagePressed.src=ImageSelect;
    secondImage.src=ImageIndexNonSelect;
    ThirdImage.src=ImageIndexNonSelect;
    Imagestate=2;
    clearInterval(Interval);
    Interval= setInterval(ChangImageView,10000);
}


function setThirdImage(ImageView,ImagePressed,secondImage,ThirdImage){
    ImageView.src=Image3;
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
    Home=document.getElementById('ImageView');

   if(Imagestate==1){
       Home.src=Image2;
       first.src=ImageIndexNonSelect;
       second.src=ImageSelect;
       third.src=ImageIndexNonSelect;
       Imagestate=2;
   }else if(Imagestate==2){
       Home.src=Image3;
       first.src=ImageIndexNonSelect;
       second.src=ImageIndexNonSelect;
       third.src=ImageSelect;
       Imagestate=3;
   }else{
       Home.src=Image1;
       first.src=ImageSelect;
       second.src=ImageIndexNonSelect;
       third.src=ImageIndexNonSelect;
       Imagestate=1;
   }
}


