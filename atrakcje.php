<?php
    $tytulStrony = "Atrakcje";
    include_once('header.php');
    include_once('easter.php');
    include_once("db_conn.php");

    $conn = mysqli_connect($host,$user,$pass,$db);

    mysqli_query($conn ,'SET CHARACTER SET utf8');
    mysqli_query($conn ,'SET collation_connection = utf8_general_ci');


?>
<div id="container">
    <div id="containerLeft">
        <div class="date">
            <div id="historyBtn" class="attractionFilters leftFloat">
                Historia
            </div>
            <div id="kidsBtn" class="attractionFilters rightFloat">
                Dzieci
            </div>
    <div style="clear: both;"></div>
            <div id="youthBtn" class="attractionFilters leftFloat">
                Młodziez
            </div>
            <div id="funBtn" class="attractionFilters rightFloat">
                Rozrywka
            </div>
        </div>
    </div>
    <div id="conRight">
        <div class="classAttraction">
            <div class="fixAttraction">
                <div id="idAttraction">
                    <?php
                        $time_now = time();
                        $after = $time_now + 0;
                        while(isThatDateWorkingDay(date('d-m-Y', $after)) == true)
                        {
                            $after = $after + 86400;
                        }
                        echo "Najbliższy dzień wolny od pracy wypada ";
                        echo "<br />";
                        echo "<br />";
                        echo date('d-m-Y', $after);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
<div id="centerStyle">
    <div id="divHistory">
        <div class="titleAttractions widthImage">
            Obiekty historyczne
        </div>
        <?php            
            $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "history"';

            $result = mysqli_query( $conn, $sql );

            while( $row = mysqli_fetch_array($result) )
            {
                echo '<div id="idek' . $row['id_atrakcji'] . '" class="attraction widthImage">';
                echo '    <img src="' . $row['sciezka'] . '" alt="">';
                echo '    <div class="darkImage widthImage"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                    <i class="fas fa-map-marked-alt"></i>
                </a>'.' </div>';
                echo '    <div class="content widthImage">';
                echo '        <div class="attractionContent">';
                echo $row['tytul'];
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        ?>
    </div>
    
    <div id="divYouth">
        <div class="titleAttractions widthImage">
            Obiekty dla młodzieży
        </div>
        <?php            
            $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "youth"';

            $result = mysqli_query( $conn, $sql );

            while( $row = mysqli_fetch_array($result) )
            {
                echo '<div id="idek' . $row['id_atrakcji'] . '" class="attraction widthImage">';
                echo '    <img src="' . $row['sciezka'] . '" alt="">';
                echo '    <div class="darkImage widthImage"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                    <i class="fas fa-map-marked-alt"></i>
                </a>'.' </div>';
                echo '    <div class="content widthImage">';
                echo '        <div class="attractionContent">';
                echo $row['tytul'];
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        ?>
    </div>
    <div id="divFun">
        <div class="titleAttractions widthImage">
            Obiekty rozrywkowe
        </div>
        <?php            
            $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "fun"';

            $result = mysqli_query( $conn, $sql );

            while( $row = mysqli_fetch_array($result) )
            {
                echo '<div id="idek' . $row['id_atrakcji'] . '" class="attraction widthImage">';
                echo '    <img src="' . $row['sciezka'] . '" alt="">';
                echo '    <div class="darkImage widthImage"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                    <i class="fas fa-map-marked-alt"></i>
                </a>'.' </div>';
                echo '    <div class="content widthImage">';
                echo '        <div class="attractionContent">';
                echo $row['tytul'];
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        ?>

    </div>

    <div id="divKids">
        <div class="titleAttractions widthImage">
            Obiekty dla dzieci
        </div>
        <?php            
            $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "kids"';

            $result = mysqli_query( $conn, $sql );

            while( $row = mysqli_fetch_array($result) )
            {
                echo '<div id="idek' . $row['id_atrakcji'] . '" class="attraction widthImage">';
                echo '    <img src="' . $row['sciezka'] . '">';
                echo '    <div class="darkImage widthImage"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                    <i class="fas fa-map-marked-alt"></i>
                </a>'.' </div>';
                echo '    <div class="content widthImage">';
                echo '        <div class="attractionContent">';
                echo $row['tytul'];
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
        ?>
        
        </div>
    </div>
</div>    
<script src="js/showMe.js"></script>
<script src="js/attDesc.js"></script>
<script defer>
    if(screen.height<screen.width){
        $(".widthImage").css("width", "51%");
        $(".darkImage").css("width", "35%");
        $("#centerStyle").css("width", "75%");
        $("#centerStyle").css("margin-left", "25%");
        $(".titleAttractions").css("margin-top", "5vh");
        $(".titleAttractions").css("width", "38.75vw");
       // $("#centerStyle").css("margin-right", "25%");
    }
</script>

<?php
    include_once('footer.php');
?>