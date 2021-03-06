<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

/**
 * @property int id
 * @property string name
 * @property string color
 * @property string deleted_at
 */
class Tag extends Resource
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
            'name' => $this->name,
            'color' => $this->color,
            'deleted_at' => $this->when($this->trashed(), $this->deleted_at),
        ];
    }
}
