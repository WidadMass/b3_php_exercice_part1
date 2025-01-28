<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */

require_once 'exercice2.php';


class Employee extends Person
{
  
    protected $salary;

   
    protected $position;


    public function __construct(string $first_name, string $last_name, int $age, float $salary, string $position)
    {
        parent::__construct($first_name, $last_name, $age);
        $this->salary  = $salary;
        $this->position = $position;
    }

 
    public function afficheInfos(): void
    {
        parent::afficheInfos();
        echo "  Salaire : " . $this->salary . "    €";
        echo "  Post : "   . $this->position . "   ";
    }

    /**
     * Get the value of salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     */
    public function setSalary($salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition($position): self
    {
        $this->position = $position;

        return $this;
    }
}

$employee = new Employee("Wiwi", "Mas", 21, 1400, " Développeuse");
$employee->afficheInfos();
