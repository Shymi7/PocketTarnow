let daneNow = 1;
function getWeather()
{
    let weatherXhr = new XMLHttpRequest();


    weatherXhr.open('POST','js/ajax/getWeather.php',true);
    weatherXhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


    weatherXhr.addEventListener('load',function(){
        if(this.status === 200)
            {
                const response = JSON.parse(this.responseText);

                const hrs   = new Date().getHours();
                let hrsB = hrs + 3;
                if(hrsB>=24) hrsB = hrsB - 24;
                let hrsC = hrs + 6;
                if(hrsC>=24) hrsC = hrsC - 24;

                const godz  =   `${response.godz}`;

                const firstTime = document.getElementById('pogodaFirst');
                const secondTime = document.getElementById('pogodaSecond');
                const thirdTime = document.getElementById('pogodaThird');

                    let godzina  =   `${response.godzina}`;
                    let temp  =   `${response.temp}`;
                    let wilg  =   `${response.wilg}`;
                    let wiatr =   `${response.wiatr}`;
                    let stan  =   `${response.stan}`;

                firstTime.addEventListener('click',function(){
                    daneNow = 1;
                    getWeather();
                });
                secondTime.addEventListener('click',function(){
                    daneNow = 2;
                    getWeather();
                });
                thirdTime.addEventListener('click',function(){
                    daneNow = 3;
                    getWeather();
                });
                //console.log(daneNow);

                if(daneNow == 1){
                    godzina  =  `${response.godzina}`;
                    temp  =   `${response.temp}`;
                    wilg  =   `${response.wilg}`;
                    wiatr =   `${response.wiatr}`;
                    stan  =   `${response.stan}`;
                }
                else if(daneNow == 2){
                    godzina  =  hrsB;
                    temp  =   `${response.tempB}`;
                    wilg  =   `${response.wilgB}`;
                    wiatr=   `${response.wiatrB}`;
                    stan  =   `${response.stanB}`;
                }
                else if(daneNow == 3)
                {
                    godzina  =  hrsC;
                    temp  =   `${response.tempC}`;
                    wilg  =   `${response.wilgC}`;
                    wiatr=   `${response.wiatrC}`;
                    stan  =   `${response.stanC}`;
                }
                else
                {
                    godzina  =  hrs;
                    temp  =   `${response.temp}`;
                    wilg  =   `${response.wilg}`;
                    wiatr=   `${response.wiatr}`;
                    stan  =   `${response.stan}`;
                }

                firstTime.innerHTML = hrs+"<u><sup>00</sup></u>";
                secondTime.innerHTML = hrsB+"<u><sup>00</sup></u>";
                thirdTime.innerHTML = hrsC+"<u><sup>00</sup></u>";

                if((`${response.godz}` != 'true') || (response.length == 0))
            {
                updateWeather();
            }

            else
                {
                    const tempNow = `${response.temp}`+'°C';
                    const stanNow = `${response.stan}`;

                    const tempPlace = document.querySelector('#fullTemp');
                    const stanPlace = document.querySelector('#weatherStanFull');
                    const godzPlace = document.getElementById('fullGodz');
                    const wiatrPlace = document.getElementById('weatherBottomFirst');
                    const wilgPlace = document.getElementById("weatherBottomSecond")

                    switch(stan){
                        case "clear sky":{
                            if((godzina > 19)||(godzina < 6))   stanPlace.innerHTML = '<i class="fas fa-moon"></i>';
                            else stanPlace.innerHTML = '<i class="fas fa-sun"></i>';
                            stanPlace.innerHTML += "<br /><br />Bezchmurne niebo";

                        }   break;
                        case "few clouds":{
                            if((godzina > 19)||(godzina < 6))   stanPlace.innerHTML = '<i class="fas fa-cloud-moon"></i>';
                            else stanPlace.innerHTML = '<i class="fas fa-cloud-sun"></i>';
                            stanPlace.innerHTML += "<br /><br />Delikatnie zachmurzone niebo";
                        }   break;
                        case "scattered clouds":{
                            stanPlace.innerHTML = '<i class="fas fa-cloud"></i>';
                            stanPlace.innerHTML += "<br /><br />Zachmurzone niebo";
                        }   break;
                        case "broken clouds":{
                            stanPlace.innerHTML = '<i class="fas fa-cloud"></i>';
                            stanPlace.innerHTML += '<i class="fas fa-cloud"></i>';
                            stanPlace.innerHTML += "<br /><br />Chmury burzowe";
                        }   break;
                        case "shower rain":{
                            stanPlace.innerHTML = '<i class="fas fa-cloud-rain"></i>';
                            stanPlace.innerHTML += "<br /><br />Pada deszcz";
                        }   break;
                        case "rain":{
                            if((godzina > 19)||(godzina > 6)) stanPlace.innerHTML= '<i class="fas fa-cloud-moon-rain"></i>';
                            else stanPlace.innerHTML = '<i class="fas fa-cloud-sun-rain"></i>';
                            stanPlace.innerHTML += "<br /><br />Delikatna mżawka";
                        }   break;
                        case "thunderstorm":{
                            stanPlace.innerHTML = '<i class="fas fa-poo-storm"></i>';
                            stanPlace.innerHTML += "<br /><br />Burza z piorunami";
                        }   break;
                        case "snow":{
                            stanPlace.innerHTML = '<i class="fas fa-snowflake"></i>';
                            stanPlace.innerHTML += "<br /><br />Sypie śnieg";
                        }   break;
                        case "mist":{  
                            stanPlace.innerHTML = '<i class="fas fa-water"></i>';
                            stanPlace.innerHTML += "<br /><br />Dość mgliście";
                            
                        }   break;
                    }
                    let min = new Date().getMinutes();
                    if(min<10) min = '0'+min;
                    if(godzina<10) godzina = '0'+godzina;
                    tempPlace.innerHTML = temp+'°C';
                    console.log(temp);
                    godzPlace.innerHTML = godzina+":"+min;
                    wiatrPlace.innerHTML = '<i class="fas fa-wind"></i><br />'+wiatr+"m/s";
                    wilgPlace.innerHTML = wilg+"%";
            }

                //console.log(res);
            }
            else{
                console.log(this.status);
            }
            
            
    });
    weatherXhr.send();
}
document.addEventListener('load',getWeather());
setInterval(getWeather,5000);



function updateWeather()
{
    let weatherXhr = new XMLHttpRequest();


    weatherXhr.open('GET','http://api.openweathermap.org/data/2.5/forecast/?id=757026&units=metric&APPID=2b46c71d90200bc3b3947839d109c712',true);


    weatherXhr.addEventListener('load',function(){
        if(this.status === 200)
            {
                const res = JSON.parse(this.responseText);

               // console.log(res);

                stanChmur = `${res.list[0].weather[0].description}`; //nazwa stanuy
                temp = `${res.list[0].main.temp}`;                   // celcjusze
                wilg = `${res.list[0].main.humidity}`;               //w procentach
                wiatr = `${res.list[0].wind.speed}`;                // metry/sekunde

                stanChmurB = `${res.list[1].weather[0].description}`; //nazwa stanuy
                tempB = `${res.list[1].main.temp}`;                   // celcjusze
                wilgB = `${res.list[1].main.humidity}`;               //w procentach
                wiatrB = `${res.list[1].wind.speed}`;                // metry/sekunde

                stanChmurC = `${res.list[2].weather[0].description}`; //nazwa stanuy
                tempC = `${res.list[2].main.temp}`;                   // celcjusze
                wilgC = `${res.list[2].main.humidity}`;               //w procentach
                wiatrC = `${res.list[2].wind.speed}`;                // metry/sekunde


              sendToWeatherSql();

            }
            else{
                console.log(this.status);
            }
            
            
    });
    weatherXhr.send();
}
function sendToWeatherSql()
{
    send = '';

    send += "stan="+JSON.stringify(stanChmur);
    send += '&temp='+JSON.stringify(temp);
    send += '&wilg='+JSON.stringify(wilg);
    send += '&wiatr='+JSON.stringify(wiatr);
    
    send += '&stanB='+JSON.stringify(stanChmurB);
    send += '&tempB='+JSON.stringify(tempB);
    send += '&wilgB='+JSON.stringify(wilgB);
    send += '&wiatrB='+JSON.stringify(wiatrB);

    send += '&stanC='+JSON.stringify(stanChmurC);
    send += '&tempC='+JSON.stringify(tempC);
    send += '&wilgC='+JSON.stringify(wilgC);
    send += '&wiatrC='+JSON.stringify(wiatrC);
    
    let weatherSendSql = new XMLHttpRequest();

    weatherSendSql.open("POST","js/ajax/weatherSendSql.php",true);
    weatherSendSql.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    weatherSendSql.addEventListener('load',function(){
        let res = JSON.parse(this.responseText);

        //console.log(res);
    });

    weatherSendSql.send(send)
}
