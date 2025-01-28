<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */

class Movie
{
    protected $title;

    protected $genre;

    protected $ageRestriction;

    public function __construct(string $title, string $genre, int $ageRestriction)
    {
        $this->title         = $title;
        $this->genre         = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch(int $viewerAge): bool
    {
        return $viewerAge >= $this->ageRestriction;
    }


    public function getTitle(): string
    {
        return $this->title;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getAgeRestriction(): int
    {
        return $this->ageRestriction;
    }
}

$movie = new Movie("fil", "horror", 12);

echo "Film : " . $movie->getTitle() . "<br>";
echo "Genre : " . $movie->getGenre() . "<br>";
echo "Restriction d'Age : " . $movie->getAgeRestriction() . " ans<br><br>";

$viewerAge = 10;
echo "age du spectateur : {$viewerAge} ans<br>";

if ($movie->canWatch($viewerAge)) {
    echo "Le spectateur peut regarder le film.<br>";
} else {
    echo "Le spectateur estt trop jeuune pour regarder ce film.<br>";
}
