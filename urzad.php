<?php
    $tytulStrony = "Urząd";
    include_once('header.php');
?>
<div id="container" style="margin-top:8vh">
    <h1 align="center">Tarnowskie urzędy</h1>

    <div style="height:auto">
        <div class="urzedyLink" id="lista1Link">Urząd miasta Tarnowa</div>
        <div id="lista1" class="urzedyLista">
            <div class="tileLeft gold" onclick="window.location.href='https://bip.malopolska.pl/umtarnow'">Strona główna</div>
            <div class="tileRight blue" onclick="window.location.href='https://bip.malopolska.pl/umtarnow/Article/get/id,955768.html'">Godziny pracy</div>
            <div class="tileLeft blue" onclick="window.location.href='http://euslugi.umt.tarnow.pl/services/home'">eUrząd</div>
            <div class="tileRight gold" onclick="window.location.href='https://bip.malopolska.pl/umtarnow/Article/get/id,897995.html'">Informacje podatkowe</div>
            <div class="tileLeft gold" onclick="window.location.href='https://bip.malopolska.pl/umtarnow/Article/id,261085.html'">Prawo lokalne</div>
            <div class="tileRight blue" onclick="window.location.href='https://bip.malopolska.pl/umtarnow/Article/get/id,958461.html'">Zagospodarowanie przestrzenne</div>

            <div style="clear:both"></div>
                
        </div>
    </div>
    <div>
        <div class="urzedyLink" id="lista2Link">Urząd skarbowy</div>
        <div id="lista2" class="urzedyLista">
            <div class="tileLeft gold" onclick="window.location.href='http://www.malopolskie.kas.gov.pl/drugi-urzad-skarbowy-w-tarnowie'">Strona główna</div>
            <div class="tileRight blue" onclick="window.location.href='http://www.malopolskie.kas.gov.pl/drugi-urzad-skarbowy-w-tarnowie/dzialalnosc/e-deklaracje'">eDeklaracje</div>
            <div class="tileLeft blue" onclick="window.location.href='http://www.malopolskie.kas.gov.pl/drugi-urzad-skarbowy-w-tarnowie/dzialalnosc/e-administracja'">eAdministracja</div>
            <div class="tileRight gold" onclick="window.location.href='http://www.malopolskie.kas.gov.pl/drugi-urzad-skarbowy-w-tarnowie/organizacja/godziny-urzedowania'">Godziny urzędowania</div>

            <div style="clear:both"></div>
        </div>
    </div>
    <div>
        <div class="urzedyLink" id="lista3Link">Urząd pracy</div>
        <div id="lista3" class="urzedyLista">
            <div class="tileLeft gold" onclick="window.location.href='http://tarnow.praca.gov.pl'">Strona główna</div>
            <div class="tileRight blue" onclick="window.location.href='http://tarnow.praca.gov.pl/oferty-pracy'">Oferty pracy</div>
            <div class="tileLeft blue" onclick="window.location.href='http://tarnow.praca.gov.pl/dokumenty-do-pobrania'">Dokumenty do pobrania</div>
            <div class="tileRight gold" onclick="window.location.href='http://tarnow.praca.gov.pl/rynek-pracy/statystyki-i-an-alizy'">Statystyki</div>

            <div style="clear:both"></div>
        </div>
    </div>
    <div>
        <div class="urzedyLink" id="lista4Link">Urząd wojewódzki</div>
        <div id="lista4" class="urzedyLista">

            <div class="tileLeft gold" onclick="window.location.href='https://www.malopolska.uw.gov.pl/index.aspx'">Strona główna</div>
            <div class="tileRight blue" onclick="window.location.href='https://www.malopolska.uw.gov.pl/default.aspx?page=paszporty'">Paszporty</div>
            <div class="tileLeft blue" onclick="window.location.href='https://www.malopolska.uw.gov.pl/default.aspx?page=fundusze_europejskie_instytucja_posredniczaca'">Fundusze Europejskie</div>
            <div class="tileRight gold" onclick="window.location.href='https://www.malopolska.uw.gov.pl/default.aspx?page=komunikaty'">Komunikaty</div>
            <div class="tileLeft gold" onclick="window.location.href='http://malopolska.uw.gov.pl/dane_teleadresowe_male.asp'">Wykaz gmin i powiatów</div>
            <div class="tileRight blue" onclick="window.location.href='https://www.malopolska.uw.gov.pl/default.aspx?page=rolnictwo'">Rolnictwo</div>


            <div style="clear:both"></div>
        </div>
    </div>






    <script>
        let divAmount=4;

        for(let i=1; i<=divAmount; i++){//dodaje rozwijane menu do każdego nagłówka
            $("#lista"+i).hide();
            $("#lista"+i+"Link").on('click', function(){
                    $("#lista"+i).slideToggle();

            });
        }



        if(screen.height<screen.width){
        $(".urzedyLink").css("margin", "8vh");
  
        }

    </script>



</div>


<?php 
    include_once('footer.php');
?>