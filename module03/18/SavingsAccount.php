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
    }

    public function getAccountDetails(): string 
    {
        return "Savings Account - Account Number: $this->accountNumber, Account Holder: $this->accountHolder, Balance: $this->balance, Interest Rate: $this->interestRate%";
    }
}
?>
