<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount
{

    protected $balance;

    public function __construct(float $initialBalance = 0.0)
    {
        $this->balance = $initialBalance;
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
        echo "Dépôt de {$amount} €.  <br>  Nouveau solde : {$this->balance} €<br>";
    }

    public function withdraw(float $amount): void
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Retrait de {$amount} €. <br> Nouveau solde : {$this->balance} €<br>";
        } else {
            echo "Solde insuffisant retrait de {$amount} € impossible. <br> Solde actu : {$this->balance} €<br>";
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

$account = new BankAccount(50); 
$account->deposit(250.00);       
$account->withdraw(100.00);        
$account->withdraw(2000.00);  
echo "Solde final : " . $account->getBalance() . " € ";
