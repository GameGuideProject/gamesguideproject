imageState =3;



function SetBackGround(image){
    imageState++;
    if(imageState>3){
        imageState=1;
    }
    if(imageState<1){
        imageState=3;
    }
    image.src="assets/img/"+imageState+".jpg";
}

isEdit=false;
function SetToEditPassword(obj1,obj2,obj3){

    if(isEdit){
        obj1.removeAttribute("disabled");
        obj2.removeAttribute("disabled");
        obj3.removeAttribute("disabled");
        obj1.style.background="";
        obj2.style.background="";
        obj3.style.background="";
        isEdit=false;
    }else{

        obj1.setAttribute("disabled", true);
        obj2.setAttribute("disabled", true);
        obj3.setAttribute("disabled", true);
        obj1.style.background="rgb(180,180,180)";
        obj2.style.background="rgb(180,180,180)";
        obj3.style.background="rgb(180,180,180)";
        isEdit=true;
    }
}



isEditi=false;
function SetToEditInfo(obj1,obj2){
 alert(obj1.innerHTML);
 alert(obj2.innerHTML);
    if(isEditi){
        obj1.removeAttribute("disabled");
        obj2.removeAttribute("disabled");
        obj1.style.background="";
        obj2.style.background="";
        isEditi=false;
    }else{
        obj1.style.background="rgb(180,180,180)";
        obj2.style.background="rgb(180,180,180)";
        obj1.setAttribute("disabled", true);
        obj2.setAttribute("disabled", true);


        isEditi=true;
    }
}

$(document).ready(function(){

})
