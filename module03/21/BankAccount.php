<?php
class BankAccount 
{
    protected string $accountNumber;
    protected string $accountHolder;
    protected float $balance;
    protected string $accountType;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, string $accountType) 
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
            echo "Error: Insufficient funds for withdrawal of {$amount}.\n";
            return false;
        }
        return true;
    }

    public function getAccountDetails(): array 
    {
        return 
        [
            'accountNumber' => $this->accountNumber,
            'accountHolder' => $this->accountHolder,
            'balance' => $this->balance,
            'accountType' => $this->accountType,
        ];
    }
}
?>
