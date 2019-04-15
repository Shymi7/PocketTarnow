<?php 
    $tytulStrony = "Logowanie";
    include_once('header.php');


    if($log){
        header("Location: index.php");
        exit();
    }
?>
<div id="container">

    <form action="tryLogin.php" method="POST" enctype="multipart/form-data" id='formLogin'>
        <input type="text" name="login" class="inpText" placeholder="Login..."><br />
        <input type="password" name="pass" class="inpText"placeholder="****">

        <button type="submit" id="btnSubmitLogin">Zaloguj się</button>
    </form>

</div>
    

<?php 
    include_once("footer.php");
?>