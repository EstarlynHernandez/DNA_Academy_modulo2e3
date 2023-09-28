<?php

namespace php\Facade;

use php\Http\Weather\OpenMeteo;
use php\Http\Weather\OpenWeather;
use php\Http\Weather\WeatherApi;

class MeteoFacade
{
    private OpenMeteo $openMeteo;
    private OpenWeather $openWeather;
    private WeatherApi $weatherApi;

    public function __construct()
    {
        $this->openMeteo = new OpenMeteo;
        $this->openWeather = new OpenWeather;
        $this->weatherApi = new WeatherApi;
    }


    public function getMeteo()
    {
        $codes = $this->openMeteo->getWeatherCode() + $this->openWeather->getWeatherCode() + $this->weatherApi->getWeatherCode();
        $code = $codes / 3;
        return match (true) {
            $code >= 800 => 'Clouds',
            $code >= 799 => 'Clear',
            $code >= 750 => 'Tornado, Ash, Squall, Dust or Sand',
            $code >= 700 => 'Fog, Dust, Haze, Smoke or Mist',
            $code >= 600 => 'Snow',
            $code >= 500 => 'Rain',
            $code >= 300 => 'Drizzle',
            default => 'Thunder',
        };
    }

    public function getTemperature()
    {
        $temperatures = $this->weatherApi->getTemperature() + $this->openWeather->getTemperature() + $this->openMeteo->getTemperature();
        return $temperatures / 3;
    }

    public function getOpenMeteo(): OpenMeteo
    {
        return $this->openMeteo;
    }

    public function getOpenWeather(): OpenWeather
    {
        return $this->openWeather;
    }

    public function getWeatherApi(): WeatherApi
    {
        return $this->weatherApi;
    }
}