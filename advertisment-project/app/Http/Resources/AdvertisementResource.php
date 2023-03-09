<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'link_image' => $this->linkImages->first(),
            'price' => $this->price
        ];
    }
}
