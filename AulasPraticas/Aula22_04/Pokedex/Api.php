<?php

const url = "https://pokeapi.co/api/v2/pokemon/";

$pokemons=[];


for ($i=1; $i < 17; $i++) { 
   
    $id = $i;

    $targetUrl = url.$id;

    $result = file_get_contents($targetUrl);
    $pokemonsMatrix = json_decode($result, true);
    
    $pokemons[$i]['name'] = $pokemonsMatrix['forms'][0]['name'];
    $pokemons[$i]['height']  = $pokemonsMatrix['height'];
    $pokemons[$i]['weight'] = $pokemonsMatrix['weight'];
    $pokemons[$i]['abilities'] = $pokemonsMatrix['abilities'];
    $pokemons[$i]['image'] = $pokemonsMatrix['sprites']['other']['dream_world']['front_default'];

}




@include 'api_view.php';







