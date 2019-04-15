<?php
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
                $response = ['godz' => 'true','godzina' => $row['godzina'],'temp' => $row['temperatura'],'wilg' => $row['wilgotnosc'],'wiatr' => $row['wiatr'],'stan' => $row['stanChmur'],'tempB' => $row['temperaturaB'],'wilgB' => $row['wilgotnoscB'],'wiatrB' => $row['wiatrB'],'stanB' => $row['stanChmurB'],'tempC' => $row['temperaturaC'],'wilgC' => $row['wilgotnoscC'],'wiatrC' => $row['wiatrC'],'stanC' => $row['stanChmurC']];
            }
            else
            {
                $response = ['godz' => $row['godzina'],'godzina' => $row['godzina'],'temp' => $row['temperatura'],'wilg' => $row['wilgotnosc'],'wiatr' => $row['wiatr'],'stan' => $row['stanChmur'],'tempB' => $row['temperaturaB'],'wilgB' => $row['wilgotnoscB'],'wiatrB' => $row['wiatrB'],'stanB' => $row['stanChmurB'],'tempC' => $row['temperaturaC'],'wilgC' => $row['wilgotnoscC'],'wiatrC' => $row['wiatrC'],'stanC' => $row['stanChmurC']];
            }
        }
        $response = json_encode($response);
        echo $response;

    }

?>