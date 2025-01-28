<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos
 */

class Article
{

    protected $title;

    protected $content;

    public function __construct(string $title, string $content)
    {
        $this->title   = $title;
        $this->content = $content;
    }

    public function getSummary(int $maxLength): string
    {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . '...';
        }

        return $this->content;
    }


    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }
}

$article = new Article(
    "test",
    "cccccccccccc djfjhzhzz qeljhsrj  ,nvdkhsv csdbwhc     vjsbiu bvjskd<bwk vdikssbgwh wnvb<bvbwhvb vhb vsh n<sv vv wdbn<fi  gb hbgqrwlhd. "
   
);

echo "Titre : " . $article->getTitle() . " <br> ";
echo "Contenu Résumé:         " . $article->getSummary(10) . "  <br>  "; 

