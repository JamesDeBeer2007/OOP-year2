<?php
require_once 'SavingsAccount.php';
require_once 'CheckingAccount.php';

$savingsAccount = new SavingsAccount("1", "Jane Doe", 2000.00, 1.5);
$checkingAccount = new CheckingAccount("2", "John Smith", 500.00, 200.00);

echo "Parent BankAccount Info: " . $savingsAccount->getAccountInfo() . "<br>";
echo "Parent BankAccount Info: " . $checkingAccount->getAccountInfo() . "<br><br>";

echo "Savings Account Info: " . $savingsAccount->getAccountInfo() . "<br>";
echo "Checking Account Info: " . $checkingAccount->getAccountInfo() . "<br>";
?>