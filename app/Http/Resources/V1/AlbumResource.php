<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "creator"=>$this->Users_id,
            "created_date" => ($this->created_at)->format('Y-m-d H:i:s'),
            "last_updated" => ($this->updated_at)->format('Y-m-d H:i:s')
        ];
    }
}
