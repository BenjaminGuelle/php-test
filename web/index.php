<?php

use PhpTest\Services\WeatherService;
use PhpTest\Services\WeatherInfos;

if (!is_file(__DIR__ . '/../vendor/autoload.php')) {
    exit('/!\ Please run composer install /!\\');
}

require __DIR__ . '/../vendor/autoload.php';


// Get weather
$weatherService = new WeatherService(/* something */);

if (isset($_GET['ville'])) 
{
    $weatherData = $weatherService->getCurrentWeatherByName($_GET['ville']);
    if (!empty($weatherData)) 
    {
        echo 'ville: '.$weatherData->getCityName().'<br>';
        echo 'température: '.$weatherData->getTemp().' °C';
    }
}
else echo "Entrez un nom de ville en paramètre get(exp: ?ville=caen)";

