<?php

$userInputs = [];


echo "Input an integer, at least 10 times\n";


for($i=0;$i<10;$i++)
{
	$numberOfTimes = $i + 1;
	echo "$numberOfTimes:";
	$userInputs[$i] = (int)readline();
}

echo "Pair numbers and their respective array positions";

foreach($userInputs as $number => $value)
{
	if($number%2==0){
		echo "Array position: $number Number: $userInputs[$number]\n";
	}
}