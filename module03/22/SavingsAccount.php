<?php
require_once 'BankAccount.php';

class SavingsAccount extends BankAccount 
{
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate) 
    {
        parent::__construct($accountNumber, $accountHolder, $balance, "Savings");
        $this->interestRate = $interestRate;
    }

    public function getAccountInfo(): string 
    {
        $baseInfo = parent::getAccountInfo();
        return "{$baseInfo}, Interest Rate: {$this->interestRate}%";
    }
}
?>
