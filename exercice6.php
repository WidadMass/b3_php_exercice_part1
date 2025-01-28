<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */


class ShoppingCart
{
    protected $items = [];
    protected $total = 0.0;//j'initialise

    public function addItem(string $name, float $price): void
    {
        $this->items[] = [
            'name'  => $name,
            'price' => $price
        ];
    }

    public function showItems(): void
    {
        if (empty($this->items)) {
            echo "Le panier est vide.<br>";
            return;
        }

        echo "Contenu du panier : <br>";
        foreach ($this->items as $item) {
            echo ". " . $item['name'] . " " . $item['price'] . " € <br>";
        }
       
    }

    public function calculateTotal(): float
    {
        // j reinitialise 
        $this->total = 0.0;

        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }

        return $this->total;
    }


    public function getTotal(): float
    {
        return $this->total;
    }
}

$cart = new ShoppingCart();

$cart->addItem("art1", 100);
$cart->addItem("art2", 13);
$cart->addItem("art3", 50);
 

$cart->showItems();

$total = $cart->calculateTotal();
echo "Coût total : " . $total . " € ";


