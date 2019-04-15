<?php
    $tytulStrony = "Zawiadomienie";
    include_once('header.php');
?>
<div id="container" style="margin-left: 0; margin-right: auto;">
    <div id="contactsList" style="">
        <h1 align="center">Złóż zawiadomienie</h1>

        <form action="addKontakt.php" method="post">
            <textarea name="co" id="coSieStao"></textarea>
            <textarea name="gdzie" id="gdzieSieStao"></textarea>
            <button id="reportButton" type="submit">Wyślij</button>
            <div id="thankYou">Dziękujemy za zgłoszenie</div>

    <!--
            <textarea name="co" placeholder="Opisz co się stało..." id="coSieStao">textarea 1 :D</textarea>
            <textarea name="gdzie" placeholder="Opisz lokalizację incydentu..." id="gdzieSieStao">textarea 2 :D</textarea>
    -->

        </form>

    </div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2"></script>

    <div class="fb-page" data-href="https://www.facebook.com/TarnowMojeM/" data-height="250px" data-width="500px" data-tabs="messages" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
        <blockquote cite="https://www.facebook.com/TarnowMojeM/" class="fb-xfbml-parse-ignore">\
            <a href="https://www.facebook.com/TarnowMojeM/">
                Mój Tarnów
            </a>
        </blockquote>
    </div>
</div>



<script type="text/javascript" defer>

    $("#thankYou").hide();
    $("#reportButton").on("click",function(){
        document.getElementById("coSieStao").value="";
        document.getElementById("gdzieSieStao").value="";
        $("#thankYou").fadeIn();
    });
        propX = window.screen.width;
        propY = window.screen.height;
        if( propX/propY > 1 )
        {
            document.getElementById("container").style.width = 500 + "px";
            document.getElementById("container").style.marginLeft = "auto";
            document.getElementsByTagName("textarea")[0].style.fontSize = "2vw";
            document.getElementsByTagName("textarea")[1].style.fontSize = "2vw";
            document.getElementById("reportButton").style.fontSize = "4vw";
            document.getElementById("thankYou").style.fontSize = "3vw";


        }
        else
        {
            document.getElementById("container").style.width = window.screen.width + "px";
            document.getElementById("container").style.marginLeft = "0";
            document.getElementsByTagName("textarea")[0].style.fontSize = "4.5vw";
            document.getElementsByTagName("textarea")[1].style.fontSize = "4.5vw";
            document.getElementById("reportButton").style.fontSize = "8vw";
            document.getElementById("thankYou").style.fontSize = "7vw";
        }


/*
function getLocation()
{
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    else
    {
        console.log("Geolocation is not supported by this browser.");
    }
}
function showPosition(position)
{
    alert("Latitude: " + position.coords.latitude +"<br>Longitude: " + position.coords.longitude);
}


getLocation();

*/
</script>

<?php 
    include_once('footer.php');
?>