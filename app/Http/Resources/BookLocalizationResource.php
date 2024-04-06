<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookLocalizationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'bookId' => $this->book_id,
            'title' => $this->title,
            'description' => $this->description,
            'language' => $this->language,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
