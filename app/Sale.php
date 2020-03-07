<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'author', 'name', 'sale',
    ];

    public function calcSale()
    {
        $previousMonth = $this->where('id', '<', $this->id)->orderBy('id','desc')->first();
        return number_format((int)$this->sale - (int)$previousMonth->sale);
    }

    public function saleToMoney($sale, $currency = '$')
    {
        $cost = env('SALE_COST') ? env('SALE_COST') : 35;
        return number_format($cost * $sale);
    }

}
