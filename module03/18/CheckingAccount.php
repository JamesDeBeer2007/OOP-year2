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
    }

    // Overschrijven van withdraw() om rekening te houden met het overstandslimiet
    public function withdraw(float $amount): bool 
    {
        if ($amount > 0 && ($this->balance + $this->overdraftLimit) >= $amount) 
        {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getAccountDetails(): string 
    {
        return "Checking Account - Account Number: $this->accountNumber, Account Holder: $this->accountHolder, Balance: $this->balance, Overdraft Limit: $this->overdraftLimit";
    }
}
?>
