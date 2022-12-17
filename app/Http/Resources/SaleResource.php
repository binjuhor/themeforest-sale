<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'author' => $this->author,
            'name' => $this->name,
            'total_sale' => \number_format($this->sale),
            'sale_in_month' => \number_format($this->sale_in_month),
            'earn' => $this->earn,
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
