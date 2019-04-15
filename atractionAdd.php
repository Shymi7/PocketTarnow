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

    <form action="sendImgAtraction.php" method="POST" enctype="multipart/form-data" class="form">

    <span  style="font-size: 1.25rem; font-weight 900; ">Kategoria atrakcji<br /></span>
        <select name="kat" id="kat">

            <option value="history">Historia</option>
            <option value="youth">Młodzież</option>
            <option value="fun">Rozrywka</option>
            <option value="kids">Dzieci</option>

        </select>

        <input type="text" placeholder="Tytuł" class="inpAtr" name="tytul"/>
        <input type="text" placeholder="Opis" class="inpAtr" name="opis"/>
        <input type="text" placeholder="Link" class="inpAtr" name="link"/>

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