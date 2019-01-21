<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 21/01/2019
 * Time: 11:43
 */

$ch = curl_init();

$ville = (isset($_GET['city_name']) ? $_GET['city_name']: null);

curl_setopt($ch, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather?q=".$ville."&units=metric&&APPID=65be0b663cbeebb1351f27dffc4a1a4c");

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);

curl_close($ch);

echo json_encode($ch);