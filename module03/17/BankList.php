<?php
class BankList 
{
    private array $bankAccounts = [];

    public function addAccount($account): void 
    {
        $this->bankAccounts[] = $account;
    }

    public function displayAccounts(): void 
    {
        foreach ($this->bankAccounts as $account) 
        {
            echo $account->getAccountDetails() . "<br>"; # deze fix
        }
    }
}
?>