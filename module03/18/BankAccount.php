<?php
class BankAccount 
{
    protected string $accountNumber;
    protected string $accountHolder;
    protected float $balance;

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
}
?>
