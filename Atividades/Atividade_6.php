<?php

$randomNumbers = [];
$userInput = null;

for($i=0;$i<30;$i++){
	$randomNumbers[$i] = mt_rand(1,15);
	
}

echo "Input an integer: ";

$userInput = (int)readline();


foreach($randomNumbers as $number =>$value)
{
    if($randomNumbers[$number] == $userInput)
    {
        echo "Your's number  is present at array position: $number \n";
    }
}