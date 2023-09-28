<?php

namespace php\Http\Weather;

use php\Http\Config\Http;

/////////
/// 2xx =>< 3xx   Thunderstorm
/// 3xx =>< 4xx   Drizzle
/// 5xx =>< 6xx   Rain
/// 6xx =>< 7xx   Snow
/// 7xx =>< 770   Mist, Smoke, Haze, Dust, Fog, Sand, Dust, Ash
/// 770 =>< 8xx   Squall, Tornado
/// 800 === 800   Clear
/// 8xx =>< 9xx   Clouds
class OpenWeather
{
    private string $api = "";
    private string $lat = "40.74257402781508";
    private string $lon = "13.868040815653178";
    private mixed $weather = null;

    public function getWeather ()
    {
        if ($this->weather === null) {
            $this->weather = Http::get("https://api.openweathermap.org/data/2.5/weather?lat=$this->lat&lon=$this->lon&appid=$this->api");
        }

        return $this->weather;
    }

    public function getCurrentWeather()
    {
        return $this->getWeather()->weather[0];
    }

    public function getWeatherCode()
    {
        return $this->getCurrentWeather()->id;
    }

    public function getTemperature(): float
    {
        return $this->getWeather()->main->temp - 273.15;
    }
}