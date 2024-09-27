<?php

class BankAccount
{
    public $balance;
    public $accountNumber;

    public function __construct($balance, $accountNumber)
    {
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
    }

    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return number_format($this->balance, 2);
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        return "U heeft € " . number_format($amount, 2) . " op uw bankaccount gezet. Uw huidige saldo is: € " . $this->getBalance();
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) 
        {
            $this->balance -= $amount;
            return "U heeft € " . number_format($amount, 2) . " opgenomen. Uw huidige saldo is: € " . $this->getBalance();
        } 

        else 
        {
            return "U heeft onvoldoende saldo om € " . number_format($amount, 2) . " op te nemen. Uw huidige saldo is: € " . $this->getBalance();
        }
    }
}

$bankAccount = new BankAccount(50.00, 123456);

echo "Uw bankaccount nummer is: " . $bankAccount->getAccountNumber() . "<br>";
echo "Uw huidige saldo is: € " . $bankAccount->getBalance() . "<br>";

echo $bankAccount->withdraw(15.00) . "<br>";
echo $bankAccount->deposit(20.00) . "<br>";

$bankAccount->setAccountNumber(98765);
echo "Uw bankaccount nummer is gewijzigd in: " . $bankAccount->getAccountNumber() . "<br>";

?>

