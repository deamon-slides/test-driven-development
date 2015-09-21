<?php

class BankAccount
{
    public $balance;

    public function deposit($int)
    {
        $this->balance += $int;
    }

    public function withdraw($int)
    {
        $this->balance -= $int;
    }
}
