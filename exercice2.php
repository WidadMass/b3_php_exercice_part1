<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */

class Person
{

    protected $first_name;


    protected $last_name;


    protected $age;


    public function __construct(string $first_name, string $last_name, int $age)
    {
        $this->first_name = $first_name;
        $this->last_name  = $last_name;
        $this->age        = $age;
    }


    public function afficheInfos(): void
    {
        echo "Prénom : " . $this->first_name . " <br>";
        echo "Nom : "    . $this->last_name  . " <br> ";
        echo "Âge : "    . $this->age        . " ans <br> ";
    }
}

$person = new Person("Widad", "Masghar", 21);
$person->afficheInfos();
