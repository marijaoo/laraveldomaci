<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PozajmicaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'Clan' => $this->resource->clan,
            'Knjiga' => $this->resource->knjiga,
            'DaniPozajmljivanja' => $this->resource->DaniPozajmljivanja,
            'DatumVracanja' => $this->resource->DatumVracanja,
        ];
    }
}