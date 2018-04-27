function GameViewResize(Reviews,ValueGameRank,GameRankText,GameViewDiscrabtion,GameViewName,GameViewShowGameButton){


    if(window.innerWidth>=1315){
        Reviews.style.display="block";
        ValueGameRank.style.display="block";
        GameRankText.style.display="block";
        GameViewDiscrabtion.style.display="block";
        GameViewName.style.display="block";
        GameViewShowGameButton.style.display="block";
    }else if(window.innerWidth>=900){
        Reviews.style.display="none";
        ValueGameRank.style.display="none";
        GameRankText.style.display="none";
        GameViewDiscrabtion.style.display="block";
        GameViewName.style.display="block";
        GameViewShowGameButton.style.display="block";
    }else {
        Reviews.style.display="none";
        ValueGameRank.style.display="none";
        GameRankText.style.display="none";
        GameViewDiscrabtion.style.display="none";
        GameViewName.style.display="none";
        GameViewShowGameButton.style.display="block";
    }




}