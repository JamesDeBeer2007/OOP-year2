<?php
require_once 'BankAccount.php';

class CheckingAccount extends BankAccount 
{
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit) 
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->overdraftLimit = $overdraftLimit;
        $this->setType("Checking");
    }

    public function getAccountDetails(): array 
    {
        return [
            'accountNumber' => $this->accountNumber,
            'accountHolder' => $this->accountHolder,
            'balance' => $this->balance,
            'accountType' => $this->accountType,
            'overdraftLimit' => $this->overdraftLimit
        ];
    }
}
?>
