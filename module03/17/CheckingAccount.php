<?php
class CheckingAccount 
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit) 
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->overdraftLimit = $overdraftLimit;
    }

    public function deposit(float $amount): void 
    {
        if ($amount > 0) 
        {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): bool {
        if ($amount > 0 && $this->balance + $this->overdraftLimit >= $amount) 
        {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function getBalance(): float 
    {
        return $this->balance;
    }

    public function getAccountDetails(): string 
    {
        return "Checking Account - Account Number: $this->accountNumber, Account Holder: $this->accountHolder, Balance: $this->balance, Overdraft Limit: $this->overdraftLimit";
    }
}
?>