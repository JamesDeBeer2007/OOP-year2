<?php
class BankAccount 
{
    protected string $accountNumber;
    protected string $accountHolder;
    protected float $balance;
    protected string $accountType;

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

    public function withdraw(float $amount): void 
    {
        if ($this->validateWithdrawal($amount)) 
        {
            $this->balance -= $amount;
        }
    }

    public function getBalance(): float 
    {
        return $this->balance;
    }

    protected function validateWithdrawal(float $amount): bool 
    {
        if ($this->balance - $amount < 0) 
        {
            echo "Error: ur broke, u cant afford: {$amount}.\n";
            return false;
        }
        return true;
    }
}
?>