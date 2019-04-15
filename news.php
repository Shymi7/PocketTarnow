<?php

    $tytulStrony = "Wydarzenia";

    include_once('header.php');

?>
<div id="container" style="margin-top: 7vh;">
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
    var imgs = cont.getElementsByTagName("img");
    for( var i = 0; i < imgs.length; i++ )
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
<?php 
    include_once('footer.php');
?>