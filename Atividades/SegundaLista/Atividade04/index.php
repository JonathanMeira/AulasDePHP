<?php

$dia = null;
$mes = null;
$ano = null;



if(isset($_POST['diaNascimento'],$_POST['mesNascimento'],$_POST['anoNascimento'])){

    $dia = $_POST['diaNascimento'];
    $mes = $_POST['mesNascimento'];
    $ano = $_POST['anoNascimento'];
    

}

function Somatorio($numero){

    $numeroAsssitente=null;

for ($i=$numero; $i>0;$i--){

    $numeroAsssitente += $i;


}
return $numeroAsssitente;

}


function Safadao($dia,$mes,$ano){

    $safadeza = Somatorio($mes) +( $ano/100 ) *( 50 - $dia);

    $anjo = 100 - $safadeza;

    return "$anjo% anjo perfeito, mas aquele $safadeza% é vagabundo";

}


require 'safadometro_view.php';