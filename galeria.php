<?php
    $tytulStrony = "Galeria";
    include_once('header.php');
?>
    <h1 align="center">Galeria</h1>
    <div style="height:6vh"></div>
<?php
    include_once('db_conn.php');
    $conn = mysqli_connect($host,$user,$pass,$db);
    $sql = 'SELECT adres, tytul FROM zdjencia;';
    mysqli_query($conn ,'SET CHARACTER SET utf8');
    mysqli_query($conn ,'SET collation_connection = utf8_general_ci');
    $result = mysqli_query( $conn, $sql );


    while( $row = mysqli_fetch_array($result) )
    {
        echo  "<div class='galleryPicture' style='background-image: url(". $row['adres'] . ")'>";
        echo "<div class='galleryPictureHeader'>". $row['tytul'] ."</div></div>";

    }

?>


<script defer>
    if(screen.height<screen.width){
        $(".galleryPicture").css("margin-left", "5%");
        $(".galleryPicture").css("width", "90%");
        $(".galleryPicture").css("height", "60vh");
        $(".galleryPictureHeader").css("bottom", "-55vh")
    }
</script>


<?php 
    include_once('footer.php');
?>