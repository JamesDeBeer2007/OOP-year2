<?php
require_once 'BankAccount.php';

class SavingsAccount extends BankAccount 
{
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate) 
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->interestRate = $interestRate;
        $this->setType("Savings");
    }

    public function getAccountDetails(): array 
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountHolder' => $this->accountHolder,
            'balance' => $this->balance,
            'accountType' => $this->accountType,
            'interestRate' => $this->interestRate
        ];
    }
}
?>
