<?php

$randomNumbers = [];

for($i=0;$i<50;$i++){
	$randomNumbers[$i] = mt_rand();
	
}


foreach($randomNumbers as $number =>$value)
{

echo "$randomNumbers[$number]\n";

}