function weatherGetLast()
{
    let hrs = new Date();

    hrs = hrs.getHours()

    let weatherSql = new XMLHttpRequest();

    weatherSql.open("POST","js/ajax/weatherSql.php",true);
    weatherSql.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    weatherSql.addEventListener('load',function(){
        if(this.status === 200)
        {
            const res = JSON.parse(this.responseText);
            if((`${res.godzina}` != 'true') || (res.length == 0))
            {
                updateWeather();
            }
            else
            {
                const tempNow = `${res.temp}`+'°C';
                const stanNow = `${res.stan}`;
                const wiatrNow = `${res.wiatr}`;

                const tempPlace = document.querySelector('.tempWeather');
                const stanPlace = document.querySelector('.stanWeather');
                const windPlace = document.querySelector('.windWeather');


                switch(stanNow){
                    case "clear sky":{
                        if((hrs > 19)||(hrs < 6))   stanPlace.innerHTML = '<i class="fas fa-moon"></i>';
                        else stanPlace.innerHTML = '<i class="fas fa-sun"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "few clouds":{
                        if((hrs > 19)||(hrs < 6))   stanPlace.innerHTML = '<i class="fas fa-cloud-moon"></i>';
                        else stanPlace.innerHTML = '<i class="fas fa-cloud-sun"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "scattered clouds":{
                        stanPlace.innerHTML = '<i class="fas fa-cloud"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "broken clouds":{
                        stanPlace.innerHTML = '<i class="fas fa-cloud"></i>';
                        stanPlace.innerHTML += '<i class="fas fa-cloud"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "shower rain":{
                        stanPlace.innerHTML = '<i class="fas fa-cloud-rain"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "rain":{
                        if((hrs > 19)||(hrs > 6)) stanPlace.innerHTML= '<i class="fas fa-cloud-moon-rain"></i>';
                        else stanPlace.innerHTML = '<i class="fas fa-cloud-sun-rain"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "thunderstorm":{
                        stanPlace.innerHTML = '<i class="fas fa-poo-storm"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "snow":{
                        stanPlace.innerHTML = '<i class="fas fa-snowflake"></i>';
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                    case "mist":{  
                        stanPlace.innerHTML = '<i class="fas fa-water"></i>';
                        
                        tempPlace.innerHTML = tempNow;
                        windPlace.innerHTML = wiatrNow + 'm/s';
                    }   break;
                }
            }

        }
    });

    weatherSql.send("time="+hrs);
}

document.addEventListener('load',weatherGetLast());
let readyToUpdate = false;

setInterval(weatherGetLast,5000);

let stanChmur = '';
let temp = '';
let wilg = '';
let wiatr = '';

let stanChmurB = '';
let tempB = '';
let wilgB = '';
let wiatrB = '';

let stanChmurC = '';
let tempC = '';
let wilgC = '';
let wiatrC = '';

function updateWeather()
{
    let weatherXhr = new XMLHttpRequest();


    weatherXhr.open('GET','http://api.openweathermap.org/data/2.5/forecast/?hourly&id=757026&units=metric&APPID=2b46c71d90200bc3b3947839d109c712',true);


    weatherXhr.addEventListener('load',function(){
        if(this.status === 200)
            {
                const res = JSON.parse(this.responseText);

                console.log(res);

                let ress = res;
                console.log(ress);

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

                console.log(stanChmurC);
                

               //console.log(stanChmur+ " "+ temp+' '+wilg+ " "+ wiatr);

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

        console.log(res);
    });

    weatherSendSql.send(send)
}


