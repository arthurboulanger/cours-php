<?php

$operator = $argv[2];
$operant1 = $argv[1];
$operant2 = $argv[3];

switch ($operator) {
	case '+':
		$resultat = $operant1 + $operant2;
	case '-':
		$resultat = $operant1 - $operant2;
	case '*':
		$resultat = $operant1 * $operant2;
	case '/':
		$resultat = $operant1 / $operant2;
}

echo ($resultat);