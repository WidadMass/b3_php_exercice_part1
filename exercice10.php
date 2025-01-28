<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */

 class Statistics
{

    public static function getSum(array $numbers): float
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
    public static function getAverage(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0;
        }
        return self::getSum($numbers) / count($numbers);
    }


    public static function getMin(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0;
        }

        $min = $numbers[0];
        foreach ($numbers as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }
        return $min;
    }

    public static function getMax(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0;
        }

        $max = $numbers[0];
        foreach ($numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }
        return $max;
    }
}

$numbers = [10, 5, 8, 20, 3, 15];



// Exemple d’utilisation
echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
echo "Somme : " . getSum($numbers) . "<br>";
echo "Moyenne : " . getAverage($numbers) . "<br>";
echo "Valeur minimale : " . getMin($numbers) . "<br>";
echo "Valeur maximale : " . getMax($numbers) . "<br>";
