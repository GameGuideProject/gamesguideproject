
var isOpen;

function ShowItemAnimation(obj,image,otherList,otherImage) {
    var imageTest =new Image();
    imageTest.src="Image/Icon/uparrow.png";
    if(isOpen) {
        if(image.src==imageTest.src){
            obj.style.display = "none";
            image.src = "Image/Icon/downarrow.png";
            isOpen=false;
        }else {
            obj.style.display = "block";
            otherList.style.display = "none";
            image.src = "Image/Icon/uparrow.png";
            otherImage.src="Image/Icon/downarrow.png";
            isOpen = true;
        }
    }else{
        obj.style.display = "block";
        image.src = "Image/Icon/uparrow.png";
        otherList.style.display="none";
        isOpen=true;
    }
}

