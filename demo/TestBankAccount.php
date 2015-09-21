<?php
require_once 'BankAccount.php';

class TestBankAccount extends PHPUnit_Framework_TestCase
{
    public function testDeposit()
    {
        $bankAccount = new BankAccount();
        $bankAccount->deposit(50);
        $this->assertEquals($bankAccount->balance, 50);
    }

    public function testWithdraw()
    {
        $bankAccount = new BankAccount();
        $bankAccount->deposit(50);
        $bankAccount->withdraw(30);
        $this->assertEquals($bankAccount->balance, 20);
    }

}
