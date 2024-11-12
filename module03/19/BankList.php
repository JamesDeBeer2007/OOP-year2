<?php
class BankList 
{
    private array $bankAccounts = [];

    public function addAccount(BankAccount $account): void 
    {
        $this->bankAccounts[] = $account;
    }

    public function displayAccounts(): void 
    {
        echo "<table border='1'>
                <tr>
                    <th>Account Number</th>
                    <th>Account Holder</th>
                    <th>Balance</th>
                    <th>Account Type</th>
                    <th>Interest Rate / Overdraft Limit</th>
                </tr>";
        foreach ($this->bankAccounts as $account) 
        {
            $details = $account->getAccountDetails();
            echo "<tr>
                    <td>{$details['accountNumber']}</td>
                    <td>{$details['accountHolder']}</td>
                    <td>{$details['balance']}</td>
                    <td>{$details['accountType']}</td>
                    <td>";
            // Checken of het een SavingsAccount of CheckingAccount is
            if ($details['accountType'] == 'Savings') 
            {
                echo "{$details['interestRate']}%";
            } else if ($details['accountType'] == 'Checking') 
            {
                echo "{$details['overdraftLimit']}";
            }
            echo "</td>
                </tr>";
        }
        echo "</table>";
    }
}
?>
