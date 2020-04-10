<?php

$operator = $argv[2];
$operant1 = $argv[1];
$operant2 = $argv[3];

//var_dump($operator);
//var_dump($argv);


function add($valeur1, $valeur2)
{
    $addition = $valeur1 + $valeur2;
    return $addition;
}

function substract($valeur1, $valeur2)
{
    $substract = $operant1 - $operant2;
    return $substract;
}

function multiply($valeur1, $valeur2)
{
    $multiply = $operant1 * $operant2;
    return $multiply;
}

function divide($numerateur, $denominateur)
{
	if ($denominateur == 0) {
		echo "No se puede amigo, lo siento :-)";
		}
		else
    $divide = $numerateur / $denominateur;
    return $divide;
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
		$resultat = divide($operant1, $operant2);
		break;
}

echo ($resultat);

