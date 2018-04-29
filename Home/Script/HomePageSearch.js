
function Keysearch(event,Text,label){
    if(event.keyCode==13) {
        /*if have Text in search box*/
        if(Text.replace(/\s+/g, '')!=="") {
           // label.innerHTML = Text;
            return
        }
        /*if have not Text in search box*/
    }
}

function mousesearch(Text,label){
    /*if have Text in search box*/
        if(Text.replace(/\s+/g, '')!=="") {
            //label.innerHTML = Text;
            return
        }
    /*if have not Text in search box*/
}
