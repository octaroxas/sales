<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'product_id' => $this->product_id,
            'client_id' => $this->client_id,
            'quantity' => $this->quantity,
            'total_price' => $this->total_price,
        ];
    }
}