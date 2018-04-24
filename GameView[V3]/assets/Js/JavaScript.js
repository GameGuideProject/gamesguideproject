function LoadTo2(obj1,obj2) {
    obj2.src=obj1.src;
}

function get(S){
    return document.getElementById(S);
}

function SetClose55(B){
    get(B).setAttribute("disabled", true);

}

function Image1(i1,i2,i3,i4,i5,B,T){
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Hated it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/draw.png";
    get(i3).src="assets/img/draw.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";
}

function Image2(i1,i2,i3,i4,i5,B,T){
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Disliked it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/draw.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";

}

function Image3(i1,i2,i3,i4,i5,B,T){
    get(B).removeAttribute("disabled");
    get(T).innerHTML="It's OK";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/draw.png";
    get(i5).src="assets/img/draw.png";

}


function Image4(i1,i2,i3,i4,i5,B,T){
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Liked it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/fill.png";
    get(i5).src="assets/img/draw.png";

}

function Image5(i1,i2,i3,i4,i5,B,T){
    get(B).removeAttribute("disabled");
    get(T).innerHTML="Loved it";
    get(i1).src="assets/img/fill.png";
    get(i2).src="assets/img/fill.png";
    get(i3).src="assets/img/fill.png";
    get(i4).src="assets/img/fill.png";
    get(i5).src="assets/img/fill.png";
}
