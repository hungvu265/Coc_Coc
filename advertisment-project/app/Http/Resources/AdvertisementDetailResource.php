<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdvertisementDetailResource extends JsonResource
{
    public function toArray($request)
    {
        $dataRequest = $request->only('fields');
        $description = [];
        $linkImage = $this->linkImages->first();

        if (in_array( 'all_link', $dataRequest['fields'] ?? [])) {
            $linkImage = $this->linkImages;
        }

        if (in_array('description', $dataRequest['fields'] ?? [])) {
            $description = ['description' => $this->description];
        }

        $result = [
            'title' => $this->title,
            'link_image' => $linkImage,
            'price' => $this->price
        ];
        $result = array_merge($result, $description);

        return $result;
    }
}
