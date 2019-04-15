<?php
    
    $tytulStrony = "Administracja";
    include_once('header.php');


    if(!$log)
    {
        header("Location:index.php");
        exit();
    }

    
?>
<div id="container">

    <form action="sendImgGalery.php" method="POST" enctype="multipart/form-data" class="form">

    <span  style="font-size: 1.25rem; font-weight 900; ">Kategoria atrakcji<br /></span>

        <input type="text" placeholder="Tytuł" class="inpAtr" name="tytul"/>

        <input type="file" name="file" class="inpAtr"/>

        <button type="submit" class="btnSubmit">Dodaj</button>

        <?php 
            if(isset($_SESSION['error'])) echo '</span style="color:red">'.$_SESSION['error']."</span>";
        ?>

    </form>
        
</div>


<?php
    include_once('footer.php')
?>