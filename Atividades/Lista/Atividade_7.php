<?php

 $primeiroIdentificador = [
     "Sargento/Sargenta",
     "Sinistro/Sinistra",
     "Relâmpago",
     "Assasino/Assasina",
     "Aniquilador/Aniquiladora",
     "O homem/A mulher",
     "Bruxo/Bruxa",
     "Cyber",
     "Caçador/Caçadora",
     "Cérebro",
     "Senhor/Senhora",
     "Doutor/Doutora",
];


 $segundoIdentificador = [
     "Escuro/a",
     "Elétrico/a",
     "Invisível",
     "Radioativo/a",
     "Voador/a",
     "De aço",
     "Aterrozidor/a",
     "Do submundo",
     "Invencível",
     "Tempestade",
     "Galáctico/a",
     "Elástico/a",
     "Magnético/a",
     "Estelar",
     "Noturno/a",
     "Iluminado/a",
     "Aterrador/a",
     "Brilhante/a",
     "De Fogo",
     "Poderoso/a",
     "Derrota mundos",
     "De ferro",
     "Atômico/a",
     "Rasga Céus",
     "Psíquico/a",
     "Implacável",
];



function GerarNomeDeVilão($primeiroIdentificador, $segundoIdentificador) {


    $nascimentoAleatório = sizeof($primeiroIdentificador);
    $nascimentoAleatório = rand(0, $nascimentoAleatório -1 );


    $letraDeNomeAleatório = sizeof($segundoIdentificador);
    $letraDeNomeAleatório = rand(0, $letraDeNomeAleatório -1 );

    echo "$primeiroIdentificador[$nascimentoAleatório] $segundoIdentificador[$letraDeNomeAleatório]";

};

?>


<!DOCTYPE html>
<html>
<head>
    <title>Atividade 7 - lista de vetores</title>

<style>

.container{
    width: 1024px;  
    height: 500px;
    display: flex; 
    margin: 0 auto;
    text-align:center;
    align-items: center;
    justify-content: center;

}

body{
  box-sizing: border-box;
  background-color: rgba(121,7,242,.75);
  color: #ffffff;
  width:100%;
  height:100%;
}

div h1{
font-size: 3.5rem;
font-weight: bold;
} 

div h3{
font-size: 2.75rem;
} 

div el{
    font-family: Verdana, sans-serif;
    font-size: 2.0rem;
    font-weight: 500;
}

</style>

</head>
<body>
    <div class='container'>
        <div>    
            <h1> Gerador aleatório de nome de vilão/vilã </h1>
            <h3>Parabéns(?), você é o/a:</h3>
            <el>"<?= GerarNomeDeVilão($primeiroIdentificador, $segundoIdentificador)?>"</el>         
        </div>
    </div>
</body>
</html>



