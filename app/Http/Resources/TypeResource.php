<?php

namespace App\Http\Resources;

use App\Models\Material;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
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
            'id' => $this->type_id,
            'material' => MaterialResource::collection(Material::where('material_id', '=', $this->material_id)->get()),
            'name' => $this->name,
        ];
    }
}
