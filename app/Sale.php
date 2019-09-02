<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'author', 'name', 'sale',
    ];

    public function calcSale($saleLastMonth)
    {
        return number_format($this->sale - $saleLastMonth->sale);
    }

    public function saleToMoney($sale, $currency = '$')
    {
        $cost = env('SALE_COST') ? env('SALE_COST') : 35;
        return number_format($cost * $sale);
    }

}
