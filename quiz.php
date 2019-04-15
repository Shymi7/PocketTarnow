<?php
    $tytulStrony = "Quiz";
    include_once('header.php');
?>


<div id="dobrze">DOBRZE!</div>
<div id="zle">ŹLE!</div>
<div id="endgame">Koniec Gry!</div>


<div id="container" style="margin-top:50px">
    <div id="question"></div>
    <div id="answers">
        <div id="a1" class="answer" onClick="getAnswer(1)">Koń</div>
        <div id="a2" class="answer" onClick="getAnswer(2)">Pies</div>
        <div id="a3" class="answer" onClick="getAnswer(3)">Kot</div>
        <div id="a4" class="answer" onClick="getAnswer(4)">Żyrafa</div>
    </div>
    <div id="points">0/20</div>

</div>



<script defer>

let points=0;
let result=0;
let currentQuestionIndex=0;
let questionsAmount;
let askedQuestions=0;


$("#endgame").hide();
$("#zle").hide();
$("#dobrze").hide();
$("#answers").hide();

//document.getElementById("question").innerHTML="<div class='answer'>Startuj!</div>";


$(document).ready(function(){
    $("#start").fadeOut();
    $("#answers").fadeIn();
    nextQuestion();
});

function getAnswer(index){
    questionTable[currentQuestionIndex].isAvailable=false;
    askedQuestions++;
    if(index==questionTable[currentQuestionIndex].rightAnswer){
        points++;
        console.log("wygrałeś")
        $("#dobrze").fadeIn().delay(1000).fadeOut();
    }
    else{
        $("#zle").fadeIn().delay(1000).fadeOut();
        console.log("przegrałeś");
    }

    $("#question, #answers").fadeOut().delay(1000).fadeIn();
    
    if(askedQuestions<20)setTimeout(nextQuestion,500);
    
}

function nextQuestion(){
    if(askedQuestions<20){
        for(let i=0; i<99999;i++){
            let a=Math.floor(Math.random()*questionTable.length)
            if(questionTable[a].isAvailable==true){
                currentQuestionIndex=a;
                document.getElementById("question").innerHTML=questionTable[currentQuestionIndex].question;
                document.getElementById("a"+1).innerHTML=questionTable[currentQuestionIndex].a;
                document.getElementById("a"+2).innerHTML=questionTable[currentQuestionIndex].b;
                document.getElementById("a"+3).innerHTML=questionTable[currentQuestionIndex].c;
                document.getElementById("a"+4).innerHTML=questionTable[currentQuestionIndex].d;
                document.getElementById("points").innerHTML=points+"/20";
                break;
            }
        }
    }
    else endGame();
}


function endGame(){
    a="Koniec gry!</br>";
    a+="Uzyskałeś "+points+" punktów na 20 możliwych"




    document.getElementById("endgame").innerHTML=a;
    $("#endgame").fadeIn();

}



function Question(id, question="brak pytania", a, b, c, d, rightAnswer, isAvailable){
    this.question=question;
    this.a=a;
    this.b=b;
    this.c=c;
    this.d=d;
    this.rightAnswer=rightAnswer;
    this.isAvailable=isAvailable;




}


let questionTable=[
    new Question(0, "Jakie imię nosi Teatr w Tarnowie Mickiewicza", "Jana Kochanowskiego", "Ludwika Solskiego", "Juliusza Słowackiego", "Jana Pawła II", 2, true),
    new Question(1, "W którym wieku Tarnów otrzymał prawa miejskie?", "w XIV", "w XV", "w XII", "w XIII", 1, true),
    new Question(2, "Który król Polski przekazał Tarnowowi prawa miejskie?", "Ludwik VI Tłusty", "Władysław Łokietek", "Władysław Jagięło", "Jadwiga Andegaweńska", 2, true),
    new Question(3, "Co przedstawia Herb Tarnowa", "gwiazdę i lisa", "miecz i tarczę", "niedźwiedzia podczas walki z wilkiem", "gwiazdę i półksiężyc",4,true),
    new Question(4, "Józef Bem jest nazywany bohaterem Polski i...?", "Słowacji", "Nimiec", "Węgier", "Rosji",3,true),
    new Question(5, "Jak nazywa się najstarsze kino w Tarnowie?", "Marzenie", "Westchnienie", "Wspomnienie", "iMax",1,true),
    new Question(6, "Do którego roku istniało województwo Tarnowskie?", "1975", "1989", "1945", "1999",4,true),
    new Question(7, "Jaka jest nazwa herbu Tarnowa?", "Leliwa", "Alabis", "Erbs", "Dębik",1,true),
    new Question(8, "W którym roku została założona Unia Tarnów?", "1944", "1950", "1957", "1963",3,true),
    new Question(9, "Góra Św. Marcina leży na...?", "Wschodzie Tarnowa", "Południu Tarnowa", "Zachodzie Tarnowa", "Północy Tarnowa",2,true),
    new Question(10, "Która z tych osób nie jest związana z Tarnowem?", "Roman Brandstaetter", "Tadeusz Tertil ", "Jan Szczepanik", "Maria Skłodowska-Curie",4,true),
    new Question(11, "Jaka jest największa rzeka przepływająca przez terytorium Tarnowa?", "Wątok", "Wisła", "Dunajec", "Biała",3,true),
    new Question(12, "W którym roku Jan Paweł II wizytował w Tarnowie?", "1981", "1987", "1990", "1994",2,true),
    new Question(13, "Gdzie znajduje się mauzoleum generała Józefa Bema?", "w parku Strzeleckim", "w parku Sanguszków", "w Starym Cmantarzu", "w Katedrze",1,true),
    new Question(14, "Kiedy miał miejsce zamach bombowy na dworcu kolejowym?", "we wrześniu 1939 roku", "w marcu 1945 roku", " w sierpniu 1939 roku", "w styczniu 1945 roku",3,true),
    new Question(15, "Które liceum jest określane mianem 'drugiej najlepszej szkoły w Tarrnowie'", "III", "II", "VI", "I",1,true),
    new Question(16, "Ile w Tarnowie znajduje się tzw. galerii handlowych?", "1", "2", "3", "4",2,true),
    new Question(17, "Jak ma na imię najbardziej rozpoznawalna osoba w Tarnowie?", "Rafał", "Robert", "Roman", "Ryszard",3,true),
    new Question(18, "Ile w Tarnowie znajduje się tramwai", "1", "2", "3", "4",1,true),
    new Question(19, "Gdzie w Tarnowie znajduje się BWA", "w ratuszu", "na ul.Krakowskiej", "na ul. Lwowskiej", "w Parku Strzeleckim",4,true),

    

];




</script>




<?php 
    include_once('footer.php');
?>