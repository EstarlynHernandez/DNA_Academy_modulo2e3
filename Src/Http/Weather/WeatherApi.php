<?php

namespace php\Http\Weather;

use php\Http\Config\Http;

/////////
/// 2 Thunderstorm
/// 3 Drizzle
/// 5 Rain
/// 6 Snow
/// 7 Mist, Smoke, Haze, Dust, Fog, Sand, Dust, Ash
/// 7 Squall, Tornado
/// 8 Clear
/// 9 Clouds
class WeatherApi
{
    private $weather = null;
    private string $api = "";
    private string $lat = "40.74257402781508";
    private string $lon = "13.868040815653178";
    private array $weatherCode = [
        1000 => 800,
        1003 => 801,
        1006 => 803,
        1009 => 804,
        1030 => 701,
        1063 => 500,
        1066 => 600,
        1069 => 611,
        1072 => 300,
        1087 => 200,
        1114 => 601,
        1117 => 602,
        1135 => 741,
        1147 => 300,
        1150 => 301,
        1153 => 302,
        1168 => 314,
        1171 => 501,
        1180 => 501,
        1183 => 501,
        1186 => 501,
        1189 => 501,
        1192 => 502,
        1195 => 503,
        1198 => 511,
        1201 => 520,
        1204 => 612,
        1207 => 613,
        1210 => 615,
        1213 => 600,
        1216 => 601,
        1219 => 601,
        1222 => 602,
        1225 => 602,
        1237 => 621,
        1240 => 520,
        1243 => 521,
        1246 => 504,
        1249 => 612,
        1252 => 613,
        1255 => 620,
        1258 => 622,
        1261 => 622,
        1264 => 622,
        1273 => 201,
        1276 => 211,
        1279 => 210,
        1282 => 211,
    ];

    public function getWeather()
    {
        if ($this->weather === null) {
            $this->weather = Http::get("http://api.weatherapi.com/v1/current.json?key=$this->api&q=$this->lat,$this->lon");
        }
        return $this->weather;
    }

    public function getCurrentWeather()
    {
        return $this->getWeather()->current;
    }

    public function getWeatherCode()
    {
        return $this->weatherCode[$this->getCurrentWeather()->condition->code];
    }

    public function getTemperature(): float
    {
        return $this->getCurrentWeather()->temp_c;
    }
}