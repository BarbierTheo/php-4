<?php

/**
 * Fonction pour sortir le plus grand nombre d'une liste
 * 
 * @param $nb int Nombre
 * 
 * @return int Plus grand nombre de la liste
 * 
 */
function biggestNumber(int ...$nb) : int
{
    $highestValue = $nb[0];
    // echo max($nb);
    foreach ($nb as $value) {
        if ($value > $highestValue) {
            $highestValue = $value;
        }
    }
    return $highestValue;
}

echo biggestNumber(3, 4, 9, 0, 3, 8, 23, 89, 456, 89, 5, 97, 87);

