<?php
session_start();

if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];

}
else $name='Log in';

if (isset($_SESSION['check'])){
    $check=$_SESSION['check'];

}
else $check=0
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="HomePagebodyStyle.css">
    <link rel="stylesheet" href="HomeMenuStyle.css">
    <link rel="stylesheet" href="RectangleGameView.css">
    <link rel="stylesheet" href="HomePageGameViewer.css">
    <link rel="stylesheet" href="MenuListStyle.css">
    <link rel="stylesheet" href="SearchSlidStyle.css">
    <link rel="stylesheet" href="W3.css">



    <script type="text/javascript" src="Script/HomePageImageSelectarController.js"></script>
    <script type="text/javascript" src="Script/HomeMenuListAnimation.js"></script>
    <script type="text/javascript" src="Script/IconTrigger.js"></script>
    <script type="text/javascript" src="Script/HomePageSearch.js"></script>
    <script type="text/javascript" src="Script/LoadGameRectangle.js"></script>
    <title>V[0.6.2AR35B]</title>
    <script type="text/javascript">
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

        function displayPlatformMenu(obj) {
            document.getElementById('PlatformMenu').style.display="block";
            obj.style.background="rgba(120, 120,120,0.4)";
            obj.style.borderBottom="2px solid rgba(20, 20, 20, 0.9)";
        }

        function  NondisplayPlatformMenu(obj){
            document.getElementById('PlatformMenu').style.display="none";
            obj.style.background="rgba(0, 0, 0, 0)";
            obj.style.borderBottom="none";
        }

        function displayCategoriesMenu(obj) {
            document.getElementById('CategoriesItemMenu').style.display="block";
            obj.style.background="rgba(120, 120,120,0.4)";
            obj.style.borderBottom="2px solid rgba(20, 20, 20, 0.9)";
        }

        function  NondisplayCategoriesMenu(obj){
            document.getElementById('CategoriesItemMenu').style.display="none";
            obj.style.background="rgba(0, 0, 0, 0)";
            obj.style.borderBottom="none";
        }

        function SetProfileMenu(){
            document.getElementById('ProfileMenu').style.marginLeft=""+document.getElementById('ProfileMenuButton').offsetLeft+"px";
            document.getElementById('ProfileMenu').style.marginTop=""+(document.getElementById('ProfileMenuButton').offsetTop+41)+"px";
        }

        function SetPlatformMenu() {
            document.getElementById('PlatformMenu').style.marginLeft=""+document.getElementById('PlatformMenuButton').offsetLeft+"px";
            document.getElementById('PlatformMenu').style.marginTop=""+(document.getElementById('PlatformMenuButton').offsetTop+41)+"px";
            document.getElementById('PlatformMenuButton').style.width="10%";

        }

        function SetCategoriesMenu() {
            document.getElementById('CategoriesItemMenu').style.marginLeft=""+document.getElementById('CategoriesMenuButton').offsetLeft+"px";
            document.getElementById('CategoriesItemMenu').style.marginTop=""+(document.getElementById('CategoriesMenuButton').offsetTop+41)+"px";
            document.getElementById('CategoriesMenuButton').style.width="10%";
        }

        var flag=false;
        function MenuListShow() {
            if(!flag) {
                flag=true;
                document.getElementById('MenuList').style.left = " 0px";
                document.getElementById('MenuList').style.transition = " left  1s";
            }else
            {
                flag=false;
                document.getElementById('MenuList').style.left = " -210px";
                document.getElementById('MenuList').style.transition = " left  1s";
            }
        }

        function get(s) {
            return document.getElementById(s);
        }
    </script>

</head>
<body   onload="Build();SetCategoriesMenu();SetPlatformMenu();SetProfileMenu();LoadGames(get('GameViewSearchSlid'))" >


<!--Menu Code Start ..................................................................................-->
<div class="MenuBorder Shadow MenuStyle" id="MenuPagePar"  >

    <a class="ButtonMenuBorder ButtonMenuStyle ButtonMenuHover" href="#MenuPagePar"  onmouseenter="MenuListShow()" onmouseleave="MenuListShow()"><img src="Image/Icon/menu.png" style="transform: translate(-3px,-2px);"></a>
    <a href="Home.html" id="HomeButtonMenu" class="ButtonMenuBorder ButtonMenuStyle ButtonMenuHover  ">Home</a>







    <a id="CategoriesMenuButton"  href="#CategoriesMenuButton" class="ButtonMenuBorder ButtonMenuStyle ButtonMenuHover "
       onmouseenter="displayCategoriesMenu(this);" onmouseleave="NondisplayCategoriesMenu(this);">Categories</a>

    <div id="CategoriesItemMenu" class="MenuItemBorder Shadow MenuItemStyle" onmouseenter="displayCategoriesMenu(document.getElementById('CategoriesMenuButton'));" onmouseleave="NondisplayCategoriesMenu(document.getElementById('CategoriesMenuButton'));">
        <a href="Home.html"  class="ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image6'))" onmouseleave="resetIcon(get('image6'))" ><img id="image6"  src="Image/Icon/Action.png" style="transform: translate(-3px,-2px);">Action</a>
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image5'))" onmouseleave="resetIcon(get('image5'))"><img id="image5" src="Image/Icon/Adventure.png" style="transform: translate(-3px,-2px);">Adventure</a>
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image1'))" onmouseleave="resetIcon(get('image1'))"><img id="image1" src="Image/Icon/Arcade.png" style="transform: translate(-3px,-2px);" >Arcade</a>
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image2'))" onmouseleave="resetIcon(get('image2'))"><img id="image2" src="Image/Icon/sport.png" style="transform: translate(-3px,-2px);">Sports</a>
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image3'))" onmouseleave="resetIcon(get('image3'))"><img id="image3" src="Image/Icon/board.png" style="transform: translate(-3px,-2px);">Board</a>
    </div>







    <a id="PlatformMenuButton"  href="#PlatformMenuButton" class="ButtonMenuBorder ButtonMenuStyle ButtonMenuHover" onmouseenter="displayPlatformMenu(this);" onmouseleave="NondisplayPlatformMenu(this);"  >Platform</a>

    <div id="PlatformMenu" class="MenuItemBorder Shadow MenuItemStyle" onmouseenter="displayPlatformMenu(document.getElementById('PlatformMenuButton'));" onmouseleave="NondisplayPlatformMenu(document.getElementById('PlatformMenuButton'));" >
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image44'))" onmouseleave="resetIcon(get('image44'))"><img id="image44" src="Image/Icon/xbox.png"> </br> XBox</a>
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image48'))" onmouseleave="resetIcon(get('image48'))"><img id="image48" src="Image/Icon/pc.png"> </br> PC</a>
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image49'))" onmouseleave="resetIcon(get('image49'))"><img id="image49" src="Image/Icon/playstation.png"> </br> PlayStation</a>
        <a href="#" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle" onmouseenter="setIcon(get('image40'))" onmouseleave="resetIcon(get('image40'))"><img id="image40" src="Image/Icon/mobil.png"> </br> Mobil</a>
    </div>









    <a href="#MessageBox" class="ButtonMenuBorder ButtonMenuStyle ButtonMenuHover w3-hide-small" style="margin-left: 56%"><img id="MessageBox" src="Image/Icon/Box.png"></a>



    <!--Profile Menu Start.............................................................................-->
    <?php

  if ($check==1){
    echo '<a id="ProfileMenuButton"  class="ButtonMenuBorder ButtonMenuStyle ProfileStyle  ButtonMenuHover "
       onmouseenter="displayProfileMenu(this)" onmouseleave="NondisplayProfileMenu(this)" >
        <img src="Image/Icon/Profile.png"  style="transform: translate(-5px,-2px);">';
echo$name;
    echo'</a>';

  }
  else {
      echo ' <a id="ProfileMenuButton" href="index.html" class="ButtonMenuBorder ButtonMenuStyle ProfileStyle "
       onmouseenter="displayProfileMenu(this)" onmouseleave="NondisplayProfileMenu(this)" >
        <img src="Image/Icon/Profile.png"  style="transform: translate(-5px,-2px);">Log in</a>';
  }

?>
    <div  id="ProfileMenu" class="MenuItemBorder Shadow MenuItemStyle"  onmouseenter="displayProfileMenu(document.getElementById('ProfileMenuButton'))"
          onmouseleave="NondisplayProfileMenu(document.getElementById('ProfileMenuButton'))" >
        <a href="Home.html"  class="ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle">Edit Profile</a>
        <a href="../login/logout.php" class=" ButtonMenuItemBorder ButtonMenuItemHoverStyle ButtonMenuItemStyle">Logout</a>
    </div>
    <!--Profile Menu End.............................................................................-->


</div>
<!--Menu Code End ..................................................................................-->



<div id="MenuList" class="MenuListBorder ShadowMenuList MenuListStyle " style="display: block; margin-top: 39px;left: -210px;"onmouseenter="MenuListShow()" onmouseleave="MenuListShow()">


    <a href="Home.html" id="HomeButtonMenuList" class="TextSideMenuListBorder TextSideMenuListHover TextSideMenuListStyle  ">Home</a>

    <a href="#" class=" TextSideMenuListBorder  TextSideMenuListStyle" style="cursor:unset;">
        Categories<img id="ArrowImageCategories" src="Image/Icon/downarrow.png" style="transform: translate(200%,-2px);cursor:pointer;"
                       onclick="ShowItemAnimation(document.getElementById('MenuListCategoriesItem'),this
        ,document.getElementById('MenuListPlatformItem'),document.getElementById('ArrowImagePlatform'))"></a>

    <div  id="MenuListCategoriesItem"  class="MenuListItemBorder">
        <a href="Home.html"  class="ButtonMenuListBorder ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image91'))" onmouseleave="resetIcon(get('image91'))"><img id="image91"  src="Image/Icon/Action.png" style="transform: translate(-3px,-2px);">Action</a>
        <a href="#" class=" ButtonMenuListBorder ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image93'))" onmouseleave="resetIcon(get('image93'))"><img id="image93"  src="Image/Icon/Adventure.png" style="transform: translate(-3px,-2px);">Adventure</a>
        <a href="#" class=" ButtonMenuListBorder ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image95'))" onmouseleave="resetIcon(get('image95'))"><img id="image95"  src="Image/Icon/Arcade.png" style="transform: translate(-3px,-2px);">Arcade</a>
        <a href="#" class=" ButtonMenuListBorder ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image96'))" onmouseleave="resetIcon(get('image96'))"><img id="image96"  src="Image/Icon/sport.png" style="transform: translate(-3px,-2px);">Sports</a>
        <a href="#" class=" ButtonMenuListBorder ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image98'))" onmouseleave="resetIcon(get('image98'))"><img id="image98"  src="Image/Icon/board.png" style="transform: translate(-3px,-2px);">Board</a>
    </div>


    <a href="#" class=" TextSideMenuListBorder  TextSideMenuListStyle"style="cursor:unset;">
        Platform<img id="ArrowImagePlatform" src="Image/Icon/downarrow.png" style="transform: translate(250%,-2px);cursor:pointer;"
                     onclick="ShowItemAnimation(document.getElementById('MenuListPlatformItem'),this
        ,document.getElementById('MenuListCategoriesItem'),document.getElementById('ArrowImageCategories'))"></a>

    <div  id="MenuListPlatformItem" class="MenuListItemBorder" >
        <a href="#" class=" ButtonMenuListBorder ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image100'))" onmouseleave="resetIcon(get('image100'))"><img id="image100"  src="Image/Icon/xbox.png" style="transform: translate(-40%,-10%);">XBox</a>
        <a href="#" class="ButtonMenuListBorder  ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image101'))" onmouseleave="resetIcon(get('image101'))"><img id="image101"  src="Image/Icon/pc.png"style="transform: translate(-40%,-10%);">PC</a>
        <a href="#" class=" ButtonMenuListBorder ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image102'))" onmouseleave="resetIcon(get('image102'))"><img id="image102"  src="Image/Icon/playstation.png"style="transform: translate(-40%,-10%);">PlayStation</a>
        <a href="#" class="ButtonMenuListBorder  ButtonMenuListHover ButtonMenuListStyle"onmouseenter="setIcon(get('image103'))" onmouseleave="resetIcon(get('image103'))"><img id="image103"  src="Image/Icon/mobil.png"style="transform: translate(-40%,-10%);">Mobil</a>
    </div>

    <a href="" id="AboutButtonMenuList" class="TextSideMenuListBorder TextSideMenuListHover TextSideMenuListStyle">About</a>


    <a href="" id="FinalTextButtonMenuList" class="TextSideMenuListBorder  TextSideMenuListStyle" style="cursor: unset;">

        <div class="TextInfoStyle" >Support</div>
        </br>
        <div class="TextInfoStyle" style="margin-top: -7%">Developer</div>
        </br>
        <div style="font-size: 8pt;text-align: left;color: #232220; margin-top: -10%;">
            Zaid Habiba
            </br>
            Ayman Abu-eideh
        </div>

    </a>


</div>





<!-- Game Viewer Home page Start .........................................-->
<div id="HomeImageViewer" class="OutSideStyle">

    <div>
        <button class="ButtomGameViewerStyle  ButtomGameViewerHoverStyle" >Show Game</button>
    </div>
    <div class="IconSlidShow">
        NEW
    </div>
    <div class="TextNameStyle">
        KILLZONE:
        </br>
        SHADOW FALL
    </div>
    <div class="TextDiscrabtionStyle">
        One of the best game anyones ever</br>
        played hands down!
    </div>


    <div>
        <img src="Image/Icon/ArrowMove.png"  class="ArrowMoveLeft" onclick="ChangImageView()">
        <img src="Image/Icon/ArrowMove.png" class="ArrowMoveRight" onclick="ChangImageView()">
    </div>


    <div id="GameRankText"  class="GameRankTextStyle">
        <B>GAME RANKING</B>
    </div>
    <div id="ValueGameRank"  class="GameRankStyle">
        Good
    </div>
    <div id="Reviews" class="ReviewsTextStyle">
        2,871 reviews
    </div>


    <div>
        <img id="ImageView" src="Image/images/killzone.jpg" class="ImageStyle">
    </div>


    <div class="ContainerImageSelectar">
        <img id="FirstPointSelecterImage" src="Image/Icon/ImageIndexSelect.png" onclick="setFirstImage(document.getElementById('ImageView'),this,document.getElementById('SecondPointSelecterImage'),document.getElementById('ThirdPointSelecterImage'));">
        <img id="SecondPointSelecterImage" src="Image/Icon/ImageIndexNonSelect.png" onclick="setSecondImage(document.getElementById('ImageView'),this,document.getElementById('FirstPointSelecterImage'),document.getElementById('ThirdPointSelecterImage'));">
        <img id="ThirdPointSelecterImage" src="Image/Icon/ImageIndexNonSelect.png" onclick="setThirdImage(document.getElementById('ImageView'),this,document.getElementById('FirstPointSelecterImage'),document.getElementById('SecondPointSelecterImage'));">
    </div>

</div>
<!-- Game Viewer Home page End .........................................-->



<div class="bodyStyle" >
    <label id="SortByLabel" class="LabelSortByStyle">Sort By</label>
    <select id="SortByList" name="SortByList" class="ListSortStyle">
        <option value="australia">Reviews</option>
        <option value="canada">TopRank</option>
        <option value="usa">Date</option>
        <option value="usa">TopLike</option>
        <option value="usa">...</option>
    </select>

    <div class="bodySearchLabelTextStyle" id="SearchLabelBody">
        <label  id="SearchLabelText" class="SearchLabelTextStyle">cs go</label>
        <img src="Image/Icon/close.png" class="IconCloseSearchStyle" onclick="closeSearch(get('SearchLabelBody'),get('Search'));">
    </div>
    <input id="Search" maxlength="50" type="text" placeholder="search" class="InputTextFieldSearchStyle"
           onkeypress="Keysearch(event,this.value,get('SearchLabelText'),get('SearchLabelBody'));"
           onclick="mousesearch(-this.value,get('SearchLabelText'),get('SearchLabelBody'));"
    >

</div>


<div id="GameViewSearchSlid" class="SuperBodyGameView">
</div>

</br>
</br>
</br>
</br>
</br>



</body>
</html>
