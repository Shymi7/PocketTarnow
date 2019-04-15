<?php
    $tytulStrony = "Strona Główna";
    include_once('header.php');
?>
<div id="container">
    <div id="containerLeft">
        <div class="date">
            <div id="dateLeft" class="tileLeft tileMenuYellow">

            </div>
        </div>

        <?php 
        
            if($typ == 'admin')
            {
                echo '<a href="./atractionAdd.php">';
                echo    '<div class="tileMenuAdmin tileLeft">';
                echo        '<i class="fas fa-map-marked-alt"></i>';
                echo        '<br /><br />Atrakcje+';
                echo   '</div>';
                echo '</a>';

            }

        ?>
        <a href="pogoda.php">
            <div id="weatherInfo" class="tileMenuBlue tileLeft">
                <div class="stanWeather">

                </div>
                <div id="weatherRight">
                    <div class="tempWeather">
                    
                        
                    </div>
                    <div class="windWeather">

                    </div> 
                </div>
                <div style="clear:both"></div>
            </div>
            <br />
        </a>
        <a href="./event.php">
            <div id="eventMenu" class="tileMenuYellow tileLeft">
            <i class="fas fa-calendar-alt"></i>
            <br /><br />Wydarzenia
            </div>
        </a>
        <a href="./galeria.php">
            <div id="galeriaMenu" class="tileMenuBlue tileLeft">
            <i class="fas fa-images"></i>
            <br /><br />Galeria
            </div>
        </a>
        <a href='./praca.php'>
            <div id="pracaMenu" class="tileMenuYellow tileLeft">
            <i class="fas fa-briefcase"></i>
            <br /><br />Praca
            </div>
        </a>
        
        <a href='./quiz.php'>
            <div id="pracaMenu" class="tileMenuBlue tileLeft">
            <i class="fas fa-comment-dots"></i>
            <br /><br />Quiz
            </div>
        </a>

        <?php 
            if($typ == 'admin')
            {
                echo '<a href="./logout.php">';
                echo    '<div class="tileMenuAdmin tileLeft">';
                echo        '<i class="fas fa-sign-out-alt"></i>';
                echo        '<br /><br />Wyloguj';
                echo   '</div>';
                echo '</a>';
    
            }    
        ?>
    </div>
    <div id="containerRight">
        <div class="date">
            <div id="dateRight" class="tileRight tileMenuBlue">
                <div id="dateRightTop">
                    Imieniny
                </div>
            </div>
        </div>

        <a href="./attraction.php">
            <div id="atractrionMenu" class="tileMenuYellow tileRight">
                <i class="fas fa-map-marked-alt"></i>
                <br /><br />Atrakcje
            </div>
        </a>
        <a href="./kontakt.php">
            <div id="kontaktMenu" class="tileMenuBlue tileRight">
                <i class="fas fa-phone"></i>
                <br /><br />Zawiadomienie
            </div>
        </a>
        <a href="./mapa.php">
            <div id="mapaMenu" class="tileMenuYellow tileRight">
            <i class="fas fa-map-marker-alt"></i>
            <br /><br />Transport
            </div>
        </a>
        <a href='./urzad.php'>
            <div id="urzadMenu" class="tileMenuBlue tileRight">
            <i class="fas fa-building"></i>
            <br /><br />eUrząd
            </div>
        </a>

        <?php 
        
        if($typ == 'admin')
        {
            echo '<a href="./galeriaAdd.php">';
            echo    '<div class="tileMenuAdmin tileLeft">';
            echo        '<i class="fas fa-images"></i>';
            echo        '<br /><br />Galeria+';
            echo   '</div>';
            echo '</a>';

        }    


        ?>

        <a href='./info_drogowe.php'>
            <div id="infoCarMenu" class="tileMenuYellow tileRight">
            <i class="fas fa-car-crash"></i>
            <br /><br />Informacja Drogowa
            </div>
        </a>
    </div>
    <div style="clear: both;"></div>

</div>

<script defer>
    if(screen.height<screen.width){
        $(".windWeather").css("margin-right", "7vh");
        $(".tempWeather").css("margin-top", "4vh");
        $(".tempWeather").css("margin-right", "21%");
        $(".stanWeather").css("margin", "2vw");
        $(".stanWeather").css("font-size", "15vh");
        $(".galleryPictureHeader").css("bottom", "-55vh");

        $("#dateRight").css("font-weight", "bold");
        $("#dateRight").css("font-size", "18px");
    }
</script>



<script src="js/searchDevice.js"></script>
<script src="js/weather.js"></script>
<script src="js/imieniny.js"></script>
<script src="js/date.js"></script>

<?php 
    include_once('footer.php');
?>