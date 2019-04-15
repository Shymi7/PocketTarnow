var fbBtn = document.getElementById("facebookButton");
var fbDiv = document.getElementById("facebookDiv");

var twtBtn = document.getElementById("twitterButton");
var twtDiv = document.getElementById("twitterDiv");

var tvBtn = document.getElementById("tvButton");
var tvDiv = document.getElementById("tarnowskaDiv");


fbBtn.addEventListener("click", pokazFb);
twtBtn.addEventListener("click", pokazTwt);
tvBtn.addEventListener("click", pokazTv);

function pokazFb()
{
    twtDiv.style.display = "none";
    tvDiv.style.display = "none";
    fbDiv.style.display = "block";
}
function pokazTwt()
{
    fbDiv.style.display = "none";
    tvDiv.style.display = "none";
    twtDiv.style.display = "block";
}
function pokazTv()
{
    fbDiv.style.display = "none";
    twtDiv.style.display = "none";
    tvDiv.style.display = "block";
}