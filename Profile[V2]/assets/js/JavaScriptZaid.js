imageState =3;
var save1=0;
var save2=0



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
        save2=1;
        isEdit=false;
    }else{

        obj1.setAttribute("disabled", true);
        obj2.setAttribute("disabled", true);
        obj3.setAttribute("disabled", true);
        obj1.style.background="rgb(180,180,180)";
        obj2.style.background="rgb(180,180,180)";
        obj3.style.background="rgb(180,180,180)";
        save2=0;
        isEdit=true;
    }
}



isEditi=false;
function SetToEditInfo(obj1,obj2){

    if(isEditi){
        obj1.removeAttribute("disabled");
        obj2.removeAttribute("disabled");
        obj1.style.background="";
        obj2.style.background="";
        isEditi=false;
        save1=1;
    }else{
        obj1.style.background="rgb(180,180,180)";
        obj2.style.background="rgb(180,180,180)";
        obj1.setAttribute("disabled", true);
        obj2.setAttribute("disabled", true);


        isEditi=true;
        save1=0;
    }
}

$(document).ready(function(){
    $('#SaveInfoButton').click(function () {


        if (save1===1) {

            var name=$('#Name').val();
            var email=$('#Email').val();


           // $('#write').load('updatevalues.php',{name:name ,email:email },function(){

            //})

            $.ajax({
                type: 'POST',
                url: 'updatevalues.php',
                data: {name:name , email:email},
                success: function (data) {

                }
            });

            SetToEditInfo(document.getElementById('Name'),document.getElementById('Email'));

        }
        else {

            save1=0;
        }
    });

})

$(document).ready(function(){
    $('#SavePasswordButton').click(function () {


        if (save2===1) {

            var opass = $('#OldPassword').val();
            var npass = $('#NewPassword').val();
            var rep = $('#RepeatNewPassword').val();

            /*alert (opass);
            alert(npass);
            alert(rep);
            */
            $('#write').load('updatePass.php',{opass: opass, npass: npass, rep:rep },function(){


                })
            //npass===rep
            if (1) {


                $.ajax({
                    type: 'POST',
                    url: 'updatePass.php',
                    data: {opass: opass, npass: npass, rep:rep},
                    success: function (data) {
                    // alert(data);
                    }
                });

                SetToEditPassword(document.getElementById('OldPassword'), document.getElementById('NewPassword'), document.getElementById('RepeatNewPassword'))

            }
            else {

                save2 = 0;
            }
        }
    });

})


$(document).ready(function(){


    $('.goToGame').click(function () {
        var x=this.id;
        var y='#-'+x;
        var value=$(y).text();

        $.ajax({
            type: 'POST',
            url: 'goToGame.php',
            data: {gotogame: value},
            success: function (data) {
                //alert(data);
                window.location.href = "../GameView[V2]/gameview.php";
            }
        });
    })
});

$(document).ready(function(){


    $('.remove').click(function () {
        var x=this.id;
        var z=x;
        var y=x.replace('+','#-');

        var value= $(y).text();



        $.ajax({
            type: 'POST',
            url: 'removefav.php',
            data: {RemoveFav: value},
            success: function (data) {

               $('#printFav').load("addFav.php");

            }
        });


        //$(y).remove();

    })
});
