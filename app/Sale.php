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
        echo $previousMonth->sale.'|';
        echo $this->sale.'|';
        return number_format($this->sale - $previousMonth->sale);
    }

    public function saleToMoney($sale, $currency = '$')
    {
        $cost = env('SALE_COST') ? env('SALE_COST') : 35;
        return number_format($cost * $sale);
    }

}
