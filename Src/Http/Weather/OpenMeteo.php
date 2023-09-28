<?php

namespace php\Http\Weather;

use php\Http\Config\Http;

class OpenMeteo
{
    private array $weatherCode = [
        0 => 800,
        1 => 801,
        2 => 803,
        3 => 804,
        45 => 741,
        48 => 741,
        51 => 300,
        53 => 301,
        55 => 302,
        56 => 311,
        57 => 314,
        61 => 500,
        63 => 501,
        65 => 502,
        66 => 511,
        67 => 520,
        71 => 600,
        73 => 601,
        75 => 602,
        77 => 613,
        80 => 521,
        81 => 522,
        82 => 531,
        85 => 621,
        86 => 622,
        95 => 200,
        96 => 201,
        99 => 202
    ];
    private string $lat = "40.74257402781508";
    private string $lon = "13.868040815653178";
    private mixed $weather = null;

    public function getWeather()
    {
        if ($this->weather === null) {
            $this->weather = Http::get("https://api.open-meteo.com/v1/forecast?latitude=$this->lat&longitude=$this->lon&current_weather=true&hourly=temperature_2m,relativehumidity_2m,windspeed_10m");
        }

        return $this->weather;
    }

    public function getCurrentWeather()
    {
        return $this->getWeather()->current_weather;
    }

    public function getWeatherCode()
    {
        return $this->weatherCode[$this->getCurrentWeather()->weathercode];
    }

    public function getTemperature(): float
    {
        return $this->getCurrentWeather()->temperature;
    }
}