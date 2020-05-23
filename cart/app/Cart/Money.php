<?php

namespace App\Cart;

use Money\Currency;
use Money\Money as BaseMoney;

use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;

use NumberFormatter;

class Money
{
    protected $money;

    public function __construct($value)
    {
        $this->money = new BaseMoney($value, new Currency('MAD'));
    }

    public function formatted()
    {
        $formatter = new IntlMoneyFormatter(
            new NumberFormatter('MAD', NumberFormatter::CURRENCY),
            new ISOCurrencies()
        );

        return $formatter->format($this->money);
    }
}
