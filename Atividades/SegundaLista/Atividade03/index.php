<?php


$vetor1 = [
    "a" => "água com limão", 
    "b" =>"Bacon", 
    "c" =>"Cúrcuma", 
    "d" =>"Doce de leite",
    "e" =>"Azeite",
    "f" =>"Frango",
    "g" =>"Gengibre",
    "h" =>"Adoçante",
    "i" =>"Açucar",
    "j" =>"Jiló",
    "k" =>"Comida Japonesa",
    "l" =>"Leite",
    "m" =>"Macarrão",
    "n" =>"Nata",
    "o" =>"Ovo",
    "p" =>"Pizza",
    "q" =>"Óleo de coco",
    "r" =>"Rabanada",
    "s" =>"Suco detox",
    "t" =>"Sal rosa",
    "u" =>"Glutamina",
    "v" =>"Jiló",
    "w" =>"Peixe",
    "x" =>"Própolis",
    "y" =>"Kumbucha",
    "z" =>"Peixe",
    
];

$vetor2 = [
    "ao acordar",
    "no pré-treino",
    "amassado com limão",
    "no cabelo",
    "em Jejum",
    "de 3 em 3 horas",
    "no chá",
    "no café",
    "depois das 18h00",
    "antes da aula",
    "misturado na àgua",
    "antes do almoço"
];

$vetor3 = [
    "diminiu o inchaço",
    "previne infarto",
    "cura dor de dente",
    "limpa o fígado",
    "deixa mais inteligente",
    "limpa as artérias",
    "deixa os musculos fracos",
    "fortalece a unha",
    "mata",
    "dá sorte",
    "da azar",
    "diminui seu vigor",
    "cura a COVID-19",
    "mata a fome",
    "diminui a barriga",
    "ajuda na luta contra o câncer"
];



function Gerarfrase($vetor1,$vetor2,$vetor3){
    $diaNascimento = (int)$_POST['diaNascimento'];
    $diaDoMes = (int)$_POST['diaDoMes'];
    $primeiraLetra = $_POST['primeiraLetra'];

    if($diaNascimento && $diaDoMes && $primeiraLetra != null){
        if($diaDoMes > 12){
            return "voce inseriu um valor errado, tente novamente.";
            
        }
        if($diaNascimento > 15){
            $diaNascimento = intdiv($diaNascimento,2);
        }
        return "$vetor1[$primeiraLetra] $vetor2[$diaDoMes] $vetor3[$diaNascimento]";
    }
}

require 'gerador_frases_view.php';