function Keysearch(event,Text,label,Labelbody){
    if(event.keyCode==13) {
        if(Text.replace(/\s+/g, '')!=="") {
            label.innerHTML = Text;
            Labelbody.style.display = "inline-block";
        }
    }
}

function mousesearch(Text,label,Labelbody){
        if(Text.replace(/\s+/g, '')!=="") {
            label.innerHTML = Text;
            Labelbody.style.display = "inline-block";
        }
}

function closeSearch(Labelbody,TextField) {
    TextField.value="";
    Labelbody.style.display="none";

}