<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'author', 'name', 'sale',
    ];

    protected $appends = ['sale_in_month', 'earn'];


    public function getSaleInMonthAttribute()
    {
        $previousMonth = $this
            ->where('id', '<', $this->id)
            ->where('author', $this->author)
            ->orderBy('id', 'desc')->first();
        if ($previousMonth) {
            return $this->sale - $previousMonth->sale;
        }
        return $this->sale;
    }

    public function getEarnAttribute()
    {
        return number_format(config('sale.cost') * $this->sale_in_month);
    }

}
