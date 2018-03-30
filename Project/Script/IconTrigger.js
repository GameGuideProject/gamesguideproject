function setIcon(img){

    var stringSpl=img.src.split(".");
    var s=stringSpl[0]+"w"+"."+stringSpl[1];

    img.src=s;

}

function resetIcon(img){
    var stringSpl=img.src.split(".");
    stringSpl[0]=stringSpl[0].substr(0,stringSpl[0].length-1);
    var s=stringSpl[0]+"."+stringSpl[1];

    img.src=s;
}