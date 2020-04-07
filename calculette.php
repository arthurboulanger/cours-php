<?php

$operator = $argv[2];
$operant1 = $argv[1];
$operant2 = $argv[3];

//var_dump($operator);
//var_dump($argv);

switch ($operator) {
	case '+':
		$resultat = $operant1 + $operant2;
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

