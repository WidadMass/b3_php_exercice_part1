<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/

class Product
{
    protected $name;
    protected $price_without_tax;
    protected $vat_rate;

    public function __construct(string $name, float $price_without_tax, float $vat_rate)
    {
        $this->name              = $name;
        $this->price_without_tax = $price_without_tax;
        $this->vat_rate          = $vat_rate;
    }
   public function getVatRate(): float
    {
        return $this->vat_rate;
    }

    public function setVatRate(float $vat_rate): void
    {
        $this->vat_rate = $vat_rate;
    }
    public function getPriceWithVat(): float
    {
        return $this->price_without_tax * (1 + $this->vat_rate);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price_without_tax
     */
    public function getPriceWithoutTax()
    {
        return $this->price_without_tax;
    }

    /**
     * Set the value of price_without_tax
     */
    public function setPriceWithoutTax($price_without_tax): self
    {
        $this->price_without_tax = $price_without_tax;

        return $this;
    }

}


$product = new Product('telephone', 1000, 0.20);

echo 'Nom du produit : ' . $product->getName() . '<br>';
echo 'Prix HT : ' . $product->getPriceWithoutTax() . ' €<br>';
echo 'Taux de TVA : ' . ($product->getVatRate() * 100) . ' %<br>';
echo 'Prix TTC : ' . $product->getPriceWithVat() . ' €<br>';
