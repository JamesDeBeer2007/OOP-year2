<?php
require_once 'SavingsAccount.php';
require_once 'CheckingAccount.php';
require_once 'BankList.php';

$savingsAccount = new SavingsAccount("1", "Jane Doe", 2000.00, 1.5);
$checkingAccount = new CheckingAccount("2", "John Smith", 500.00, 200.00);

$bankList = new BankList();
$bankList->addAccount($savingsAccount);
$bankList->addAccount($checkingAccount);

$bankList->displayAccounts();
?>