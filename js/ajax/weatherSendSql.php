<?php

    if(isset($_POST['stan']))           $stan = json_decode($_POST['stan']);
    if(isset($_POST['temp']))           $temp = json_decode($_POST['temp']);
    if(isset($_POST['wilg']))           $wilg = json_decode($_POST['wilg']);
    if(isset($_POST['wiatr']))          $wiatr = json_decode($_POST['wiatr']);

    if(isset($_POST['stanB']))           $stanB = json_decode($_POST['stanB']);
    if(isset($_POST['tempB']))           $tempB = json_decode($_POST['tempB']);
    if(isset($_POST['wilgB']))           $wilgB = json_decode($_POST['wilgB']);
    if(isset($_POST['wiatrB']))          $wiatrB = json_decode($_POST['wiatrB']);

    if(isset($_POST['stanC']))           $stanC = json_decode($_POST['stanC']);
    if(isset($_POST['tempC']))           $tempC = json_decode($_POST['tempC']);
    if(isset($_POST['wilgC']))           $wilgC = json_decode($_POST['wilgC']);
    if(isset($_POST['wiatrC']))          $wiatrC = json_decode($_POST['wiatrC']);


    include_once('../../db_conn.php');

    $conn = mysqli_connect($host,$user,$pass,$db);

    $hrs = date('H');

    $query = "INSERT INTO pogoda VALUES(NULL,$hrs,$temp,$wilg,'$wiatr','$stan',$tempB,$wilgB,'$wiatrB','$stanB',$tempC,$wilgC,'$wiatrC','$stanC')";

    $result = mysqli_query($conn,$query);

    echo json_encode($stanC);

?>