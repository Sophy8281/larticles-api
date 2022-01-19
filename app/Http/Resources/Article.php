<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Get all fields
        //return parent::toArray($request);

        // Get only needed fields
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://sophtech.com')
        ];
    }
}
