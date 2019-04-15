<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PocketTarnów</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styl2.css">
    <link rel="stylesheet" href="css/atractionStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <?php 
        session_start();

        if(isset($_SESSION['login']))
        {
            $log = $_SESSION['login'];
            if(isset($_SESSION['typ']))   $typ = $_SESSION['typ'];

        }
        else 
        {
            $log = false;
            $typ = "user";
        }

    ?>

<div id="topBar">
    <img src="img/tlo2.png" alt="(logo)" id="headerLogo" onclick="window.location.href='index.php'"/>
    <div class='menuText' onclick="window.location.href='index.php'"><div id="appTitle">PocketTarnów</div>
    <?php
    echo "/";
    
    echo $tytulStrony;
    ?>
    </div>
</div>

<script defer>
    if(screen.height>screen.width){
        $("#topBar").css("font-size", "calc(1em + 1.7vw)");
        $(".menuText").css("margin-top", "1.5vh")

    }
</script>


