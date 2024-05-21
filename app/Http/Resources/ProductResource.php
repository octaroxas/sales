<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'company_id' => $this->company_id,
            'name' => $this->name,
            'price' => $this->price,
        ];
    }
}
