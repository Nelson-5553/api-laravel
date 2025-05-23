<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'post_name' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'category' => [
                'id' => $this->category->id,
                'name' => $this->category->name,
            ],
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email,
            ],
            'published_at' => $this->published_at,
        ];
    }
}
