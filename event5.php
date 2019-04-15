<?php
    $tytulStrony = "Wydarzenia";
    include_once('header.php');
?>
<div id="container" style="margin-top: 6vh; width: 500px; margin-left: auto; margin-right: auto;">

    <div id="fb-root" style="margin-top: 0;"></div>

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2"></script>


    <div class="fb-page" data-href="https://www.facebook.com/TarnowMojeM/" data-height="300px" data-width="500px" data-tabs="timeline, events" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
        <blockquote cite="https://www.facebook.com/TarnowMojeM/" class="fb-xfbml-parse-ignore">\
            
        </blockquote>
    </div>
</div>
    
    <script>
        var fbDiv = document.getElementsByClassName("fb-page")[0];
        var newHeightEvent = window.innerHeight;
        propX = window.screen.width;
        propY = window.screen.height;
        
        if( propX/propY > 1 )
        {
            newHeightEvent *= 0.95;
            document.getElementById("container").style.width = 500 + "px";
        }
        else
        {
            newHeightEvent *= 0.78;
            document.getElementById("container").style.width = window.screen.width + "px";
        }
        var fbHeight = Math.round( newHeightEvent );
        fbDiv.setAttribute("data-height", fbHeight );
        fbDiv.setAttribute("data-width", window.screen.width );

    </script>
    </body>
</html>
<?php 
    //include_once('footer.php');
?>