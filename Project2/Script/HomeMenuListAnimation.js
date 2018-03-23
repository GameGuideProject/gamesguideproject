
var isOpen;

function ShowItemAnimation(obj,image,otherList,otherImage) {
    var imageTest =new Image();
    imageTest.src="Image/uparrow.png";
    if(isOpen) {
        if(image.src==imageTest.src){
            obj.style.display = "none";
            image.src = "Image/downarrow.png";
            isOpen=false;
        }else {
            obj.style.display = "block";
            otherList.style.display = "none";
            image.src = "Image/uparrow.png";
            otherImage.src="Image/downarrow.png";
            isOpen = true;
        }
    }else{
        obj.style.display = "block";
        image.src = "Image/uparrow.png";
        otherList.style.display="none";
        isOpen=true;
    }
}

