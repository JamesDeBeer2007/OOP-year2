<?php
require_once 'BankAccount.php';

class CheckingAccount extends BankAccount 
{
    private float $overdraftLimit;

    public function __construct(string $accountNumber, string $accountHolder, float $balance, float $overdraftLimit) 
    {
        parent::__construct($accountNumber, $accountHolder, $balance, "Checking");
        $this->overdraftLimit = $overdraftLimit;
    }

    public function getAccountInfo(): string 
    {
        $baseInfo = parent::getAccountInfo();
        return "{$baseInfo}, Overdraft Limit: {$this->overdraftLimit}";
    }
}
?>
