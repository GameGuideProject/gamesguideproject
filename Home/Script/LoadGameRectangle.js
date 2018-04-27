
var imagecount=6;


function LoadGames(Objectbody) {
    imagecount=6;
    Objectbody.style.height=""+(((imagecount*300)/3)+150)+"px";
}
function Resize(Objectbody,MuneSearch,SearchInput){


    if(window.innerWidth>=1315){
        Objectbody.style.width="82%";
        MuneSearch.style.width="82%";
        Objectbody.style.marginLeft="8%";
        MuneSearch.style.marginLeft="8%";
        SearchInput.style.width="560px";
        SearchInput.style.marginLeft="35%";
        SearchInput.style.marginTop="8px";
        Objectbody.style.height=""+(((imagecount*300)/3)+150)+"px";
        GenerateGame(Objectbody,3)
    }else if(window.innerWidth>=1100){
        Objectbody.style.width=""+(((2*320))+115)+"px";
        MuneSearch.style.width=""+(((2*320))+115)+"px";
         x= window.innerWidth;
        y=x-(((2*320))+110);
        y=y/2;
        Objectbody.style.marginLeft=""+y-10+"px";
        MuneSearch.style.marginLeft=""+y-10+"px";
        SearchInput.style.width="480px";
        SearchInput.style.marginLeft="19%";
        SearchInput.style.marginTop="8px";
      GenerateGame(Objectbody,2);
    }else {
        Objectbody.style.width=""+(((1*320))+225)+"px";
        MuneSearch.style.width=""+(((1*320))+225)+"px";
        x= window.innerWidth;
        y=x-(((1*320))+225);
        y=y/2;
        Objectbody.style.marginLeft=""+y-10+"px";
        MuneSearch.style.marginLeft=""+y-10+"px";
        SearchInput.style.width="300px";
        SearchInput.style.marginLeft="22%";
        SearchInput.style.marginTop="8px";

       GenerateGame(Objectbody,1);
    }

}

function GenerateGame(Objectbody,countGame) {
    if(countGame==3){
        var b=Objectbody.innerHTML;
        Objectbody.innerHTML="";
        var n=b.split('<div class="RectangleGameViewBodyStyle"');
        for(i=0;i<n.length;i++){
            if(i!=0)
                n[i]='<div class="RectangleGameViewBodyStyle" '+'style="margin-top: 7%;margin-left: 2.5%"'+n[i];
        }
        for(i=0;i<n.length;i++){
            if(i!=0)
                Objectbody.innerHTML+=n[i];
        }
       /* if((n.length-1)/3==0){
            Objectbody.style.height=""+((((n.length-1)*300)/3)+300)+"px";
        }else
        Objectbody.style.height=""+((((n.length-1)*300)/3))+"px";*/
        count=0;
       for(i=0;true;){
           if(n.length-3>i+1){
             count+=1;
             i+=3;
           }else {
               count+=1;
               break;
           }

       }

        Objectbody.style.height=""+((((count)*300)+70))+"px";


         }else if(countGame==2){
        style="margin-top: 8%;margin-left: 5%"
        var b=Objectbody.innerHTML;
        Objectbody.innerHTML="";
        var n=b.split('<div class="RectangleGameViewBodyStyle"');
        for(i=0;i<n.length;i++){
            if(i!=0)
           n[i]='<div class="RectangleGameViewBodyStyle" '+'style="margin-top: 8%;margin-left: 5%"'+n[i];
        }
        for(i=0;i<n.length;i++){
            if(i!=0)
                Objectbody.innerHTML+=n[i];
        }
        if((n.length-1)%2==1){
            Objectbody.style.height=""+((((n.length)*300)/2)-20)+"px";
        }else
        Objectbody.style.height=""+((((n.length-1)*300)/2))+"px";

        }else {


        style="margin-top: 10%;margin-left: 18%"
        var b=Objectbody.innerHTML;
        Objectbody.innerHTML="";
        var n=b.split('<div class="RectangleGameViewBodyStyle"');
        for(i=0;i<n.length;i++){
            if(i!=0)
                n[i]='<div class="RectangleGameViewBodyStyle"'+'style="margin-top: 10%;margin-left: 18%"'+n[i];
        }
        for(i=0;i<n.length;i++){
            if(i!=0)
                Objectbody.innerHTML+=n[i];
        }
        Objectbody.style.height=""+((((n.length-1)*280)+120))+"px";
    }
}

