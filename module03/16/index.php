<?php
require_once 'BankAccount.php';
require_once 'BankList.php';

$account1 = new BankAccount("1", "Jane Doe", 1000.00, "Savings");
$account2 = new BankAccount("2", "John Smith", 500.00, "Checking");

$account1->deposit(250.00);

$account2->withdraw(100.00);

$bankList = new BankList();
$bankList->addAccount($account1);
$bankList->addAccount($account2);

$bankList->displayAccounts();
?>