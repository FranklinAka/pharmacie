<?php
    // Get current time
    date_default_timezone_set('UTC');
    $currentTime = time();
    // Get weather forecast data from API
    $apiKey = "1b43f9bdc8c0f420c279054620016f44";
    $location = "Abidjan";
    $forecast = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/forecast?q=$location&appid=$apiKey&units=metric&lang=fr"), true);
    $forecastData = $forecast['list'];
?>
