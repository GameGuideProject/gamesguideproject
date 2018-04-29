<?php

if (!(isset($_SESSION['checkload']))) {
    session_start();
}

for ($i=0;$i<$_SESSION['gameSearchNames']->count();$i++) {

    $img=$_SESSION['gameSearchBackGround'][$i];
    $icon=$_SESSION['gameSearchIcons'][$i];
    $des=$_SESSION['gameSearchdescrption'][$i];
    $name=$_SESSION['gameSearchNames'][$i];

    echo '
<div class ="div1">
    <div class="RectangleGameViewBodyStyle" id="'."a".$i.'" > <div>
            
    <img class="RectangleGameViewIconStyle" src= "data:image/jpeg;base64,'.base64_encode($icon).'" id="'."b".$i.'">
            
    </div> <img class="RectangleGameViewImageStyle" src= "data:image/jpeg;base64,'.base64_encode($img).'" width="100%" id="'."c".$i.'">
        
    <div class="RectangleGameViewNameStyle" ><b id="'."d".$i.'" >'.$name.'</b> </div>
        
    <div ><div class="RectangleGameViewDescription" id="'."e".$i.'"><br> '.$des.'</div></div></div>
    </div>
    <script type="text/javascript">
     Resize(get(\'GameViewSearchSlid\'),get(\'MuneSearch\'),get(\'SearchInput\'));
</script>
    ';

};
if ($_SESSION['gameSearchNames']->count()==0 && (isset($_SESSION['checkload']))){
    echo'<h1> NOTHING FOUND :(</h1>';
    echo "<br>";
    echo "Try a diffrent Search ";

}

?>