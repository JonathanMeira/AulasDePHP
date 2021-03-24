<?php

$mesDeNascimento = [
    "Janeiro" => "Sargento/Sargenta",
    "Fevereiro" => "Sinistro/Sinistra",
    "Março" => "Relâmpago",
    "Abril" => "Assasino/Assasina",
    "Maio" => "Aniquilador/Aniquiladora",
    "Junho" => "O homem/A mulher",
    "Julho" => "Bruxo/Bruxa",
    "Agosto" => "Cyber",
    "Setembro" => "Caçador/Caçadora",
    "Outubro" => "Cérebro",
    "Novembro" => "Senhor/Senhora",
    "Dezembro" => "Doutor/Doutora",
];


$primeiraLetraDoNome = [
    "a" => "Escuro/a",
    "b" => "Elétrico/a",
    "c" => "Invisível",
    "d" => "Radioativo/a",
    "e" => "Voador/a",
    "f" => "De aço",
    "g" => "Aterrozidor/a",
    "h" => "Do submundo",
    "i" => "Invencível",
    "j" => "Tempestade",
    "k" => "Galáctico/a",
    "l" => "Elástico/a",
    "m" => "Magnético/a",
    "n" => "Estelar",
    "o" => "Noturno/a",
    "p" => "Iluminado/a",
    "q" => "Aterrador/a",
    "r" => "Brilhante/a",
    "s" => "De Fogo",
    "t" => "Poderoso/a",
    "u" => "Derrota mundos",
    "v" => "De ferro",
    "w" => "Atômico/a",
    "x" => "Rasga Céus",
    "y" => "Psíquico/a",
    "z" => "Implacável",
];

echo "

<style>

*
{
    box-sizing: border-box;
}
.container{
    width: 500px;
    height:auto;
    display: flex; 
    flex-direction:row;
    margin: 0 auto;
    flex-wrap: wrap; 
}

.containeir > div{
    flex: 1 0 50%;
    text-align: center;
    padding: 10px;
}

.container > div:first-child
{
    flex: 0 1 100%;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}


</style>


<div class='container'>
    <div>    
            <h1> Descubra seu nome de vilão/vilã </h1>    
    </div>
    <div>   
            <h3>Seu mês de nascimento:</h3> 
        <ul>";
            foreach($mesDeNascimento as $mes => $value)
            {
              echo "<li><b>$mes</b>: $mesDeNascimento[$mes]</li>";
            }   
echo"   </ul>
   </div>
    <div>   
            <h3>Primeira letra do seu nome:</h3>     
        <ul>";
            foreach($primeiraLetraDoNome as $letra => $value)
            {
            echo "<li><b>$letra</b>: $primeiraLetraDoNome[$letra]</li>";
            }   
echo"   </ul>  
    </div>
</div>

";