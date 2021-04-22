<?php

$numberList = [
13, 55, 10, 24, 50, 3.14, 5.16, 8, 10, 101 
];

$reversedArray = array_reverse($numberList);

echo "Array list: \n\n";
foreach($numberList as $position => $value)
{
	echo "$numberList[$position]\n";
}
echo "<br>Reversed array: \n\n";

foreach($reversedArray as $position => $value)
{
	echo "$reversedArray[$position]\n";
}