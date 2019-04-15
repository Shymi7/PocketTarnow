<?php
    $tytulStrony = "Transport";
    include_once('header.php');
?>
<div id="container">
    <div id="googleMap" >
        <!--mapa -->
    </div>
</div>


<?php 
/*
    0. Lp.
    1. Pełna nazwa przystanku
    2. ID słupka
    3. Opis słupka
    4. Numer przystanku
    5. Numer słupka
    6. Strefa
    7. Numer Inwentarzowy
    8. Ulica
    9. Miejscowość
    10. Gmina
    11. Pozycja GPS Długość
    12. Pozycja GPS Szerokość
*/
    $str = file_get_contents("res/busStop.xml");
    
    $dom = new DOMDocument();
    $dom->loadXML($str);
    
    function getCell( $d, $x, $y )
    {
        return $d->getElementsByTagName('Row')[$x]->getElementsByTagName('Data')[$y]->nodeValue;
    }
    $i = 0;
    $j = 0;
    $arr = array();

    foreach( $dom->getElementsByTagName('Row') as  $keyJ => $row )
    {
        foreach( $row->getElementsByTagName('Data') as $keyI => $data )
        {
            if($keyJ > 5)
            {
                if( $keyI == 1 || $keyI == 4 || $keyI == 11 || $keyI == 12  )
                {
                    $arr[$j][$i] = $data->nodeValue;
                    
                    $i++;
                }
            }
            else
            {
                $j = -1;
            }
        }
        $i = 0;
        $j++;
    }

    /*
    foreach( $arr as $ja => $xd )
    {
        echo $ja;
        echo ": ";
        echo "<br />";
        foreach( $xd as $ia => $dx )
        {
            echo $ia;
            echo "-";
            echo $dx;
            echo "<br />";
        }
        echo "<br />";
    }
    */
?>
<script type="text/javascript">

    var arr = <?php echo json_encode($arr); ?>;

    function ConvertDMSToDD( geo )
    {
        if( geo === undefined )
        {
            return;
        }
        geo = geo.split(/[^\d\w]+/);
        var degrees = geo[1];
        var minutes = geo[2];
        var seconds = geo[3];
        var dec = geo[4];

        var dd = parseFloat(degrees) +
        ( parseFloat( minutes )/60 ) +
        ( ( parseFloat( seconds ) + ( parseFloat( dec )/10 ) ) /3600 );
        return dd;
    }
    
    function initMap()
    {
        map = new google.maps.Map(document.getElementById('googleMap'), {
            center: {lat: 50.008030, lng: 20.975709},
            zoom: 16
        });

        
        //908
        for ( var i = 0; i < 908; i++ )
        {
            if( arr[i] !== undefined )
            {
                var name = "[ " + arr[i][1] + "]" + arr[i][0];
                var x = arr[i][3];
                var y = arr[i][2];
                addMarker( x, y, name );
            }
        }
        
    }
    function addMarker( x, y, name )
    {
        x = ConvertDMSToDD( x );
        y = ConvertDMSToDD( y );

        //console.log(x,y);
        var infoWindow = new google.maps.InfoWindow;
        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = name;
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.textContent = "Przystanek autobusowy";
        infowincontent.appendChild(text);

        let punkt  = new google.maps.LatLng(x,y);
        let opcjeMarkera =
        {
            position: punkt,
            map: map,
            title: name,
        }
        let marker = new google.maps.Marker(opcjeMarkera);

        marker.addListener('click', function() {
        infoWindow.setContent(infowincontent);
        infoWindow.open(map, marker);
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCB0m-BJuquS3EDHPculuy7f4y4w8VmyAY&callback=initMap" async defer></script>

</body>
</html>