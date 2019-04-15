historyClicked = false;
youthClicked = false;
kidsClicked = false;
funClicked = false;



var btnHistory = document.getElementById("historyButton");
var btnYouth = document.getElementById("youthButton");
var btnKids = document.getElementById("kidsButton");
var btnFun = document.getElementById("funButton");
console.log(btnHistory);
console.log(btnYouth);
console.log(btnKids);
console.log(btnFun);
btnHistory.addEventListener("click", historyClick);
btnYouth.addEventListener("click", youthClick);
btnKids.addEventListener("click", kidsClick);
btnFun.addEventListener("click", funClick);

var displayHistory = document.getElementById("divHistory");
var displayYouth = document.getElementById("divYouth");
var displayKids = document.getElementById("divKids");
var displayFun = document.getElementById("divFun");


function historyClick()
{
    if( historyClicked == false )
    {
        historyClicked = true;
        displayHistory.style.display = "block";
        btnHistory.style.backgroundColor = "#AA9239";
        btnHistory.style.color = "#28546C";
    }
    else
    {
        historyClicked = false;
        displayHistory.style.display = "none";
        btnHistory.style.backgroundColor = "#28546C";
        btnHistory.style.color = "#FFFFFF";
    }

}
function youthClick()
{
    if( youthClicked == false )
    {
        youthClicked = true;
        displayYouth.style.display = "block";
        btnYouth.style.backgroundColor = "#AA9239";
        btnYouth.style.color = "#28546C";
    }
    else
    {
        youthClicked = false;
        displayYouth.style.display = "none";
        btnYouth.style.backgroundColor = "#28546C";
        btnYouth.style.color = "#FFFFFF";
    }

}
function kidsClick()
{
    if( kidsClicked == false )
    {
        kidsClicked = true;
        displayKids.style.display = "block";
        btnKids.style.backgroundColor = "#AA9239";
        btnKids.style.color = "#28546C";
    }
    else
    {
        kidsClicked = false;
        displayKids.style.display = "none";
        btnKids.style.backgroundColor = "#28546C";
        btnKids.style.color = "#FFFFFF";
    }

}
function funClick()
{
    if( funClicked == false )
    {
        funClicked = true;
        displayFun.style.display = "block";
        btnFun.style.backgroundColor = "#AA9239";
        btnFun.style.color = "#28546C";
    }
    else
    {
        funClicked = false;
        displayFun.style.display = "none";
        btnFun.style.backgroundColor = "#28546C";
        btnFun.style.color = "#FFFFFF";
    }

}