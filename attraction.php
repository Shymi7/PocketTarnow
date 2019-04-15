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
<div id="attractionContainer">
    <div id="attractionButtons">
        <div id="historyButton" class="attractionButton buttonLeft">
            Historia
        </div>
        <div id="kidsButton" class="attractionButton buttonRight">
            Dzieci
        </div>
        <div style="clear: both;"></div>
        <div id="youthButton" class="attractionButton buttonLeft">
            Młodziez
        </div>
        <div id="funButton" class="attractionButton buttonRight">
            Rozrywka
        </div>
    </div>
    <div id="attractionFreeDay">
        <div id="attractionFreeDayArea">
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
    <div style="clear: both;"></div>
    <div id="divHistory" class="attractionCategory">
        <div class="attractionCategoryTitle">
            Obiekty Historyczne
        </div>
        <div class="attractionElements">
            <?php            
                $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "history"';

                $result = mysqli_query( $conn, $sql );

                while( $row = mysqli_fetch_array($result) )
                {
                    echo '<div id="idek' . $row['id_atrakcji'] . '" class="attractionElement">';
                    echo '    <img src="' . $row['sciezka'] . '" alt="">';
                    echo '    <div class="attractionDarkness"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                        <i class="fas fa-map-marked-alt"></i>
                    </a>'.' </div>';
                    echo '        <div class="attractionContent">';
                    echo $row['tytul'];
                    echo '    </div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    <div id="divYouth" class="attractionCategory">
        <div class="attractionCategoryTitle">
            Obiekty młodzieżowe
        </div>
        <div class="attractionElements">
            <?php            
                $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "youth"';

                $result = mysqli_query( $conn, $sql );

                while( $row = mysqli_fetch_array($result) )
                {
                    echo '<div id="idek' . $row['id_atrakcji'] . '" class="attractionElement">';
                    echo '    <img src="' . $row['sciezka'] . '" alt="">';
                    echo '    <div class="attractionDarkness"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                        <i class="fas fa-map-marked-alt"></i>
                    </a>'.' </div>';
                    echo '        <div class="attractionContent">';
                    echo $row['tytul'];
                    echo '    </div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    <div id="divFun" class="attractionCategory">
        <div class="attractionCategoryTitle">
            Obiekty rozrywkowe
        </div>
        <div class="attractionElements">
            <?php            
                $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "fun"';

                $result = mysqli_query( $conn, $sql );

                while( $row = mysqli_fetch_array($result) )
                {
                    echo '<div id="idek' . $row['id_atrakcji'] . '" class="attractionElement">';
                    echo '    <img src="' . $row['sciezka'] . '" alt="">';
                    echo '    <div class="attractionDarkness"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                        <i class="fas fa-map-marked-alt"></i>
                    </a>'.' </div>';
                    echo '        <div class="attractionContent">';
                    echo $row['tytul'];
                    echo '    </div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
    <div id="divKids" class="attractionCategory">
        <div class="attractionCategoryTitle">
            Obiekty dla dzieci
        </div>
        <div class="attractionElements">
            <?php            
                $sql = 'SELECT id_atrakcji, tytul, opis, sciezka, linka FROM atrakcje WHERE kategoria = "kids"';

                $result = mysqli_query( $conn, $sql );

                while( $row = mysqli_fetch_array($result) )
                {
                    echo '<div id="idek' . $row['id_atrakcji'] . '" class="attractionElement">';
                    echo '    <img src="' . $row['sciezka'] . '" alt="">';
                    echo '    <div class="attractionDarkness"> ' . $row['opis'] . ' ' . '<a href="' . $row['linka'] . '">
                        <i class="fas fa-map-marked-alt"></i>
                    </a>'.' </div>';
                    echo '        <div class="attractionContent">';
                    echo $row['tytul'];
                    echo '    </div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>
</div>

<script defer>
    if(screen.height<screen.width)
    {
        var check = document.getElementById("attractionContainer");

        check.style.width = "50%";
    }
</script>
<script src="js/showMe.js"></script>
<script src="js/attDesc.js"></script>
<?php
    include_once('footer.php');
?>