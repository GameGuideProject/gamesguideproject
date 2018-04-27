function displayProfileMenu(obj) {
    document.getElementById('ProfileMenu').style.display="block";
    obj.style.background="rgba(120, 120,120,0.4)";
    obj.style.borderBottom="2px solid rgba(20, 20, 20, 0.9)";
}

function  NondisplayProfileMenu(obj){
    document.getElementById('ProfileMenu').style.display="none";
    obj.style.background="rgba(0, 0, 0, 0)";
    obj.style.borderBottom="none";
}



function SetProfileMenu(){
    document.getElementById('ProfileMenu').style.marginLeft=""+document.getElementById('ProfileMenuButton').offsetLeft+"px";
    document.getElementById('ProfileMenu').style.marginTop=""+(document.getElementById('ProfileMenuButton').offsetTop+41)+"px";
}



function  ResizeProfileMenu() {
    document.getElementById('ProfileMenu').style.marginLeft=""+document.getElementById('ProfileMenuButton').offsetLeft+"px";
    document.getElementById('ProfileMenu').style.marginTop=""+(document.getElementById('ProfileMenuButton').offsetTop+41)+"px";
    document.getElementById('ProfileMenu').style.width=""+(document.getElementById('ProfileMenuButton').style.width)+"";

}

function get(s) {
    return document.getElementById(s);
}

function ResetMenu() {
    SetProfileMenu();
    document.getElementById('MessageBox').style.marginLeft=""+ (+window.innerWidth-(135+135+50+80+180))+"px";
}











