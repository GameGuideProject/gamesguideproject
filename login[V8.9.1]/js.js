function testSubmit(t1,t2){

    if(document.getElementById(t1).value==""){
        document.getElementById(t1).style.borderColor="red";
        document.getElementById(t1).style.boxShadow=" 0 0px 8px 0 rgba(184,6,6,0.40), 0 0px 20px 0 rgba(187,54,54,0.50)";
        event.preventDefault();
    }else{
        document.getElementById(t1).style.borderColor="";
        document.getElementById(t1).style.boxShadow="";

    }

    if(document.getElementById(t2).value==""){
        document.getElementById(t2).style.borderColor="red";
        document.getElementById(t2).style.boxShadow=" 0 0px 8px 0 rgba(184,6,6,0.40), 0 0px 20px 0 rgba(187,54,54,0.50)";
        event.preventDefault();
    }else{
        document.getElementById(t2).style.borderColor="";
        document.getElementById(t2).style.boxShadow="";
    }



}


function testSubmit2(t1){

    if(document.getElementById(t1).value==""){
        document.getElementById(t1).style.borderColor="red";
        document.getElementById(t1).style.boxShadow=" 0 0px 8px 0 rgba(184,6,6,0.40), 0 0px 20px 0 rgba(187,54,54,0.50)";
        event.preventDefault();
    }else{
        document.getElementById(t1).style.borderColor="";
        document.getElementById(t1).style.boxShadow="";

    }


}



function testSubmit3(t1,t2,t3,t4){

    if(document.getElementById(t1).value==""){
        document.getElementById(t1).style.borderColor="red";
        document.getElementById(t1).style.boxShadow=" 0 0px 8px 0 rgba(184,6,6,0.40), 0 0px 20px 0 rgba(187,54,54,0.50)";
        event.preventDefault();
    }else{
        document.getElementById(t1).style.borderColor="";
        document.getElementById(t1).style.boxShadow="";

    }


    if(document.getElementById(t2).value==""){
        document.getElementById(t2).style.borderColor="red";
        document.getElementById(t2).style.boxShadow=" 0 0px 8px 0 rgba(184,6,6,0.40), 0 0px 20px 0 rgba(187,54,54,0.50)";
        event.preventDefault();
    }else{
        document.getElementById(t2).style.borderColor="";
        document.getElementById(t2).style.boxShadow="";

    }
    if(document.getElementById(t3).value==""){
        document.getElementById(t3).style.borderColor="red";
        document.getElementById(t3).style.boxShadow=" 0 0px 8px 0 rgba(184,6,6,0.40), 0 0px 20px 0 rgba(187,54,54,0.50)";
        event.preventDefault();
    }else{
        document.getElementById(t3).style.borderColor="";
        document.getElementById(t3).style.boxShadow="";

    }
    if(document.getElementById(t4).value==""){
        document.getElementById(t4).style.borderColor="red";
        document.getElementById(t4).style.boxShadow=" 0 0px 8px 0 rgba(184,6,6,0.40), 0 0px 20px 0 rgba(187,54,54,0.50)";
        event.preventDefault();
    }else{
        document.getElementById(t4).style.borderColor="";
        document.getElementById(t4).style.boxShadow="";

    }
}