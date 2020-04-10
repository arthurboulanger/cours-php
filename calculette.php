<?php

$operator = $argv[2];
$operant1 = $argv[1];
$operant2 = $argv[3];

//var_dump($operator);
//var_dump($argv);


function additionner($operant1, $operant2){
    $addition = $operant1 + $operant2;
    return $addition;
}

switch ($operator) {
	case '+':
		$resultat = additionner($operant1, $operant2);
		break;
	case '-':
		$resultat = $operant1 - $operant2;
		break;
	case '*':	
		$resultat = $operant1 * $operant2;
		break;
	case '/':
		$resultat = $operant1 / $operant2;
		break;
}

echo ($resultat);

