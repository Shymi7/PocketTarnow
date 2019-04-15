<?php

    $tytulStrony = "Wydarzenia";

    include_once('header.php');

?>
<div id="container">

    <div id="socBtns">
        <div id="facebookButton" class="socialButton"><i id="facebookIcon" class="fab fa-facebook"></i></div>
        <div id="twitterButton" class="socialButton"><i id="twitterIcon" class="fab fa-twitter"></i></div>
        <div id="tvButton" class="socialButton"><i id="tvIcon" class="far fa-newspaper" class="tarnowskaLogo"></i></i></div>
        <div style="clear:both"></div>
    </div>
    <div id="facebookDiv" style="margin-top: 5vh; width: 100%; margin-left: auto; margin-right: auto;">

        <div id="fb-root" style="margin-top: 0;"></div>

            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2"></script>
        
        
        <div class="fb-page" data-href="https://www.facebook.com/           TarnowMojeM/" data-height="300px" data-width="100px"            data-tabs="timeline, events" data-small-header="true"           data-adapt-container-width="true" data-hide-cover="false"       data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/TarnowMojeM/     " class="fb-xfbml-parse-ignore">\    
                </blockquote>
        </div>
    </div>
    <div id="twitterDiv" style="margin-top: 5vh; width: 100%; margin-left: auto; margin-right: auto; height: 60vh; overflow: auto;">
        
        <a class="twitter-timeline" data-lang="pl" data-link-color="#AA9239" href="https://twitter.com/Tarnow_TCI?ref_src=twsrc%5Etfw">Tarnów</a>
        
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div id="tarnowskaDiv" style="margin-top: 5vh; width: 100%; margin-left: auto; margin-right: auto;">
        <div id="tarnowskaLogoTlo" onclick='window.location.href = "https://www.tarnowska.tv/wiadomosci/250/region-tarnowski/"'><img id="tarnowskaLogo" src="img/trnTv.png" alt="" /></div>
        <?php
            $newsDom = new DOMDocument();
            libxml_use_internal_errors(true);
            $newsDom->loadHTMLFile('https://www.tarnowska.tv/wiadomosci/250/region-tarnowski/');
            $lists = $newsDom->getElementsByTagName("div");
            foreach( $lists as $list )
            {
                foreach( $list->attributes as $attrib )
                {
                    if( $attrib->value == "articles_list_item" )
                    {

                        echo "<div class='oneNews infoBlue'>";
                        
                        print( $newsDom->saveHTML($list) );
                        echo "</div>";
                    }
                }
            }
        ?>
        </div>
        <script type="text/javascript" defer>
            var cont = document.getElementById("container");
            var tarDiv = document.getElementById("tarnowskaDiv");
            var imgs = tarDiv.getElementsByTagName("img");
            for( var i = 1; i < imgs.length; i++ )
            {
                var cpy = imgs[i].getAttribute("data-original");
                imgs[i].setAttribute("src", cpy);
            }
            var h4ki = cont.getElementsByTagName("h4");
            for( var i = 0; i < h4ki.length; i++ )
            {
                h4ki[i].setAttribute("style", "color: #AA9239;");
            }
            var spany = cont.getElementsByTagName("span");
            for( var i = 0; i < spany.length; i++ )
            {
                spany[i].setAttribute("style", "color: #FFFFFF;");
            }
            var smalle = cont.getElementsByTagName("small");
            for( var i = 0; i < smalle.length; i++ )
            {
                smalle[i].setAttribute("style", "color: #AAAAAA;");
                smalle[i].outerHTML += "<br />";
            }
            
        </script>
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
        cont.style.width = 500 + "px";
        cont.style.marginLeft = "auto";
        cont.style.marginRight = "auto";
    }
    else
    {
        newHeightEvent *= 0.73;
        cont.style.width = window.screen.width + "px";
    }
    var fbHeight = Math.round( newHeightEvent );
    fbDiv.setAttribute("data-height", fbHeight );
    fbDiv.setAttribute("data-width", window.screen.width );

</script>


<script src="js/events.js"></script>


<?php 
    include_once('footer.php');
?>