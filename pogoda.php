<?php

    $tytulStrony = "Pogoda";

    include_once('header.php');

?>
<div id="container">

    <div id="pogodaFirst" class="weatherTop"> </div>
    <div id="pogodaSecond" class="weatherTop"> </div>
    <div id="pogodaThird" class="weatherTop"> </div>
    <div style="clear:both"></div>
    <div id="weatherStanFull">

    </div>
    <div id="weatherRightFull">

        <div id="fullTemp" class="weatherRightInfoFull"></div>
        <div id="fullGodz" class="weatherRightInfoFull"></div>

    </div>
    <div style="clear:both"></div>
    <div id="weatherBottomFirst"></div>
    <div id="weatherBottomSecond"></div>
    <div style="clear:both"></div>


</div>

    <script>
        var propX = window.screen.width;
        var propY = window.screen.height;
        zmien();

        window.addEventListener("resize",function(){
            propX = window.screen.width;
            propY = window.screen.height;
            //console.log(propX/propY);

            zmien();
        });
        function zmien(){
            if(propX/propY > 1)
            {
                document.getElementById('weatherStanFull').classList.add("weatherStanFullPc");
            } 
            else
            {
                document.getElementById('weatherStanFull').classList.remove("weatherStanFullPc");
            }
        }
    </script>

 
<script src="js/weatherFull.js"></script>

<?php 
    include_once('footer.php');
?>