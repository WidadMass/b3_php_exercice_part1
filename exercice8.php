<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */
require_once 'exercice2.php';
class Student extends Person
{
    protected $grades = [];

    public function __construct(string $first_name, string $last_name, int $age, array $grades = [])
    {

        parent::__construct($first_name, $last_name, $age);
        $this->grades = $grades;
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function setGrades(array $grades): void
    {
        $this->grades = $grades;
    }

    public function getAverage(): float
    {
        if (count($this->grades) === 0) {
         
            return 0.0;
        }
        $sum = array_sum($this->grades);
        return $sum / count($this->grades);
    }

    public function afficheInfos(): void
    {

        parent::afficheInfos();

        if (!empty($this->grades)) {
            echo "Notes : " . implode(", ", $this->grades) . "<br>";
            echo "Moyenne : " . $this->getAverage() . "<br>";
        } else {
            echo "Aucune note pour cet étudiant.<br>";
        }
    }
}


$student = new Student("wiwi", "Masghar", 21, [11, 14, 18, 17, 16]);

$student->afficheInfos();

echo "<hr>";

$student->setGrades([12, 13, 14]);
echo "Nouvelles notes : " . implode(", ", $student->getGrades()) . "<br>";
echo "Nouvelle moyenne : " . $student->getAverage() . "<br>";
