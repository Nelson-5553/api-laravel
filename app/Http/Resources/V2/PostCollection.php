<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    // public $collects = PostResources::class;
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'data' => $this->collection,
        'meta' => [
            'organization' => 'Platzi',
            'authors' => [
                'NelsonJimenez',
                'Cursos Platzi'
            ]
        ],
        'type' => 'articles',
        ];
    }
}
