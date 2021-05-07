<?php

const id =' nnCYFUkRwDDntYzMJR0bt';

const secretKey = 'cyMuKcZXvNOEwxxOIMQ5qRX8mVCAdPSIxUFS0pEe';

const baseUrl = 'https://api.aerisapi.com/conditions/';


if(isset($_GET['cidade'])){


$cidade = $_GET['cidade'];

$cidade = urlencode($cidade);

$url = baseUrl . "{$cidade},br?client_id=" . id . "&client_secret=" . secretKey;

$json = file_get_contents($url);

$dataAPI = json_decode($json, true);



        $nome = $dataAPI['response'][0]['place']['name'];
        $temperatura = $dataAPI['response'][0]['periods'][0]['tempC'];
        $sensacao = $dataAPI['response'][0]['periods'][0]['feelslikeC'];
        $umidade = $dataAPI['response'][0]['periods'][0]['humidity'];
        $velocidadeDoVento = $dataAPI['response'][0]['periods'][0]['windSpeedKPH'];
}

require "view.php";



