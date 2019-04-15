<?php
    $tytulStrony = "Giełda pracy";
    include_once('header.php');
?>
<div id="container">
    <div id="margintop"><br /></div>
    <!-- AJAX HEAD CONTRIB --><div id="widget_classifieds_5cb39eb76b173" class="margin20_auto"> <div id="widget_wrapper_5cb39eb76b173"> <div id="widget_hd_5cb39eb76b173"> <a id="widget_hd_link_logo_5cb39eb76b173"rel="nofollow" href="https://www.olx.pl/praca/tarnow/"> <img id="widget_hd_logo_5cb39eb76b173" src="https://static-olxeu.akamaized.net/static/olxpl/naspersclassifieds-regional/olxeu-atlas-web-olxpl/static//img/logo_widget.png?v=1" alt=""> </a> <a id="widget_hd_link_5cb39eb76b173" rel="nofollow" href="https://www.olx.pl/praca/tarnow/"> Og&#322;oszenia Lokalne Praca Tarn&#243;w </a> </div> <div id="widget_bd_5cb39eb76b173"> <div id="widget_5cb39eb76b173">Ładowanie</div> </div> <div id="widget_ft_5cb39eb76b173"> </div> </div></div><script type="text/javascript" src="https://www.olx.pl/ajax/widget/get/5cb39eb76b173/?data=width=100,category=4,number=25,city_id=17369,"></script>

</div>
<script type="text/javascript" defer>

    var olxDiv = document.getElementById("widget_classifieds_5cb39eb76b173");
    var headerA = document.getElementById("widget_hd_link_5cb39eb76b173");
    var olxLogo = document.getElementById("widget_hd_logo_5cb39eb76b173").remove();
    olxDiv.setAttribute("style","border: 1px solid rgb(217, 217, 217); background: rgb(255, 255, 255); width: 100vw; font-family: 'Raleway', sans-serif; font-weight: bold; text-align: left; line-height: 16px;");
    var texts = olxDiv.getElementsByTagName("a");
    
    console.log(texts);
    
    for( var i = 0; i < texts.length; i++ )
    {
        var style = "color: " + ((i%2) ? "#AA9239":"#28546C") + "; font-size: 3vh; text-decoration: none; line-height: 1.6";
        texts[i].setAttribute("style", style);
    }
    headerA.setAttribute("style","color: #AA9239; font-size: 5vh; line-height: normal; text-decoration: none;");
    headerA.innerHTML += '<img src="https://i0.wp.com/windowsowo.pl/wp-content/uploads/2014/04/olx.png?resize=40%2C40&ssl=1" />';
</script>
<?php 
    include_once('footer.php');
?>