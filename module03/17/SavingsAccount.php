<?php
class SavingsAccount 
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private float $interestRate;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $interestRate) 
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    public function deposit(float $amount): void 
    {
        if ($amount > 0) 
        {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): bool 
    {
        if ($amount > 0 && $this->balance >= $amount) 
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
        return "Savings Account - Account Number: $this->accountNumber, Account Holder: $this->accountHolder, Balance: $this->balance, Interest Rate: $this->interestRate%";
    }
}
?>