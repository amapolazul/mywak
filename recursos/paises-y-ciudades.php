<?php
/**
 * Created by PhpStorm.
 * User: jsmartinez
 * Date: 15/08/2016
 * Time: 6:53 PM
 */
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $country = $_GET["country"];
    $string = file_get_contents("countriesToCities.json");
    $decoded = utf8_encode($string);
    $json = json_decode($string);
    $cities = $json -> $country;
    foreach ($cities as $city) {
        echo '<option value="'.$city.'">'.$city.'</option>';
    }
}