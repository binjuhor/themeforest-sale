<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
      'author','name', 'sale',
    ];

    public function calcSale($saleLastMonth)
    {
        return number_format($this->sale - $saleLastMonth->sale);
    }

    public function saleToMoney($sale, $currency= '$')
    {
            return number_format(35*$sale);
    }

}
