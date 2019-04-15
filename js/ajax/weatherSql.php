<?php

    if(isset($_POST['time']))       $time = json_decode($_POST['time']);

    include_once('../../db_conn.php');


    $conn = mysqli_connect($host,$user,$pass,$db);

    if(!$conn)
    {
        echo "błąd połączenie z bza danych ";
        exit();

    }
    else
    {
        $query = 'SELECT * FROM pogoda order By id desc limit 1';
        
        $result = mysqli_query($conn,$query);

        $response = [];

        while($row = mysqli_fetch_array($result))
        {
            if(date('H') == $row['godzina'])
            {
                $response = ['id' => $row['id'],'godzina' => 'true',"temp" => $row['temperatura'], "stan" => $row['stanChmur'],"wiatr" => $row["wiatr"]];
            }
            else
            {
                $response = ['id' => $row['id'],'godzina' => $row['godzina'],"temp" => $row['temperatura'], "stan" => $row['stanChmur'],"wiatr" => $row["wiatr"]];
            }
        }
        $response = json_encode($response);

        echo $response;
    }

?>