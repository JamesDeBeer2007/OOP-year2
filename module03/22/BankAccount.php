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

    public function getAccountInfo(): string 
    {
        return "Account Number: {$this->accountNumber}, Account Holder: {$this->accountHolder}, Balance: {$this->balance}, Account Type: {$this->accountType}";
    }

    public function getBalance(): float 
    {
        return $this->balance;
    }
}
?>
