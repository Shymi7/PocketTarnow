<?php
    if(isset($_POST['xD']))
    {
        echo $_POST['xD'];
        $xd = $_POST['xD'];
        echo $xd;
    }
    else
    {
        header('Location: index.php');
    }
    if(isset($_POST['co']))
    {
        echo $_POST['co'];
        $co = $_POST['co'];
        echo $co;
    }
    else
    {
        header('Location: index.php');
    }

    if(isset($_POST['gdzie']))
    {
        $gdzie = $_POST['gdzie'];
        echo $gdzie;
    }
    else
    {
        header('Location: index.php');
    }


    include_once("db_conn.php");

    $conn = mysqli_connect($host,$user,$pass,$db);


    $sql = 'INSERT INTO zloszenia VALUES (NULL,now(),"' . $co . '","' . $gdzie . '")';

    
    mysqli_query($conn ,'SET CHARACTER SET utf8');
    mysqli_query($conn ,'SET collation_connection = utf8_general_ci');

   $result = mysqli_query($conn,$sql);

   //header("Location:index.php")


?>