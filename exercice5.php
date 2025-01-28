<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */
class Math
{

    public static function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public static function multiply(float $a, float $b): float
    {
        return $a * $b;
    }
}


echo "1 + 2 = " . Math::add(1, 2) ."<br>";
echo "5 - 3 = " . Math::subtract(5, 3) ."<br>";
echo "4 * 6 = " . Math::multiply(4, 6) . "<br>";
