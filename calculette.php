<?php

$operator = $argv[2];
$operant1 = $argv[1];
$operant2 = $argv[3];

//var_dump($operator);
//var_dump($argv);


function add($operant1, $operant2)
{
    $addition = $operant1 + $operant2;
    return $addition;
}

function substract($operant1, $operant2)
{
    $substract = $operant1 - $operant2;
    return $substract;
}

function multiply($operant1, $operant2)
{
    $multiply = $operant1 * $operant2;
    return $multiply;
}

switch ($operator) {
	case '+':
		$resultat = add($operant1, $operant2);
		break;
	case '-':
		$resultat = substract($operant1, $operant2);
		break;
	case '*':	
		$resultat = multiply($operant1, $operant2);
		break;
	case '/':
		$resultat = $operant1 / $operant2;
		break;
}

echo ($resultat);

