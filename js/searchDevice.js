var propX = window.screen.width;
var propY = window.screen.height;
zmien();

window.addEventListener("resize",function(){
    propX = window.screen.width;
    propY = window.screen.height;
    //console.log(propX/propY);

    zmien();
});
function zmien(){
    if(propX/propY > 1)
    {
        document.getElementById('weatherInfo').classList.add("weatherInfoPc");
        /*
        document.querySelector('.tempWeather').classList.add("tempWeatherPc");
        document.querySelector('.stanWeather').classList.add("stanWeatherPc");
        document.querySelector('.windWeather').classList.add("windWeatherPc");
        */
    } 
    else
    {
        document.getElementById('weatherInfo').classList.remove("weatherInfoPc");
        /*
        document.querySelector('.tempWeather').classList.remove("/tempWeatherPc");
        document.querySelector('.stanWeather').classList.remove("/stanWeatherPc");
        document.querySelector('.windWeather').classList.remove("windWeatherPc");
        */
    }
}