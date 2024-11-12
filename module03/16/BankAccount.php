<?php
class BankAccount 
{
    private string $accountNumber;
    private string $accountHolder;
    private float $balance;
    private string $accountType;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType) 
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
    }

    public function setAccount(string $accountNumber, string $accountHolder, float $balance, string $accountType): void 
    {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
        $this->accountType = $accountType;
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
        return "Account Number: $this->accountNumber, Account Holder: $this->accountHolder, Balance: $this->balance, Account Type: $this->accountType";
    }
}
?>