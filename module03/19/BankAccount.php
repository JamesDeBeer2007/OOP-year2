<?php
class BankAccount 
{
    protected string $accountNumber;
    protected string $accountHolder;
    protected float $balance;
    protected string $accountType;

    public function setType(string $accountType): void 
    {
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
        if ($amount > 0 && $this->balance - $amount >= 0) 
        {
            $this->balance -= $amount;
        }
    }

    public function getBalance(): float 
    {
        return $this->balance;
    }
}
