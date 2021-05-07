<?php


$numeroDaMega = [];
$numerosDaMegaOrdenados =[];
$todosDiferentes = false;
$contador = 0;

do{
    $numeroDaMega[$contador] = rand(1,60);

    if($contador!= 0){
        foreach($numeroDaMega as $numero =>$value){
            if($numeroDaMega[$contador] == $numeroDaMega[$numero] && $contador != $numero)
            {
                $todosDiferentes = false;
            }
            }
    }else
    {
        if($contador == 5)
        {
            $todosDiferentes = true;
        }
    }
    $contador++;
}

while($contador <6 && $todosDiferentes == false);

$numerosDaMegaOrdenados = $numeroDaMega;

sort($numerosDaMegaOrdenados);

echo "Os números sorteados na mega são: ";
foreach ($numerosDaMegaOrdenados as $numero => $value){
echo "$numerosDaMegaOrdenados[$numero] ";
}