<?php

$avarageGrade = null;
$studantGrade=[
	"First Bimester" => 100,
	"Second Bimester" => 85,
	"Third Bimester" => 23,
	"Fourth Bimester" => 68,
];

foreach($studantGrade as $grade => $key){
	echo "$grade: $studantGrade[$grade]\n";

	$avarageGrade += $studantGrade[$grade];
}

$avarageGrade = $avarageGrade/count($studantGrade);

echo "\n>Avarage: $avarageGrade";