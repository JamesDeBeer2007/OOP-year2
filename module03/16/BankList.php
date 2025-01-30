<?php
class BankList 
{
    private array $bankAccounts = [];

    public function addAccount(BankAccount $account): void 
    {
        $this->bankAccounts[] = $account;
    }

    public function getAccounts(): array 
    {
        return $this->bankAccounts;
    }

    public function displayAccounts(): void 
    {
        foreach ($this->bankAccounts as $account) 
        {
            echo $account->getAccountDetails() . "<br>"; #deze fix
        }
    }
}
?>