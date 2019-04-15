<?php
    $tytulStrony = "Informacje";
    include_once('header.php');
?>
<div id="container" style="margin-top:8vh;">

<?php
    $roadDom = new DOMDocument();
    libxml_use_internal_errors(true);
    $roadDom->loadHTMLFile('https://traffic.naviexpert.pl/remonty/tarnow/');
    $div = $roadDom->getElementById("repairs");
    $tr = $div->getElementsByTagName("tr");

    $bool=0;

    foreach( $tr as $i => $tt )
    {
        switch ( $i%4 )
        {
            case 0:
                if($bool==0){
                    echo '<div class="roadInfo infoYellow">';
                    $bool=1;
                }
                else{
                    echo '<div class="roadInfo infoBlue">';
                    $bool=0;
                }
                echo '<div class="roadTitle">';
                break;
            case 2:
                echo '<div class="roadStart">';
                break;
            case 3:
                echo '<div class="roadEnd">';
                break;
            default:
                echo '<div style="display: none;">';

        }
        $node = $tt->nodeValue;
        $node = str_replace("Ã³","ó", $node);
        $node = str_replace("Ä","ę", $node);
        $node = str_replace("Å","ń", $node);
        echo $node;
        
        
        echo "</div>";
        if( $i%4 == 3 )
        {
            echo "</div>";
        }
    }
?>
<!-- <div class="roadInfo infoYellow">
    <div class="roadTitle">Starodabrowska</div>
    <div class="roadStart">Start o 14:00</div>
    <div class="roadEnd">Koniec o 16:00</div>
</div>
<div class="roadInfo infoBlue">
    <div class="roadTitle">Nowodabrowska</div>
    <div class="roadStart">Start o 16:00</div>
    <div class="roadEnd">Koniec o 18:00</div>
</div> -->
<a class="twitter-timeline" data-lang="pl" data-link-color="#AA9239" href="https://twitter.com/NaviExpert/timelines/1053283704146194432?ref_src=twsrc%5Etfw">woj. małopolskie - Curated tweets by NaviExpert</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<?php 
    include_once('footer.php');
?>