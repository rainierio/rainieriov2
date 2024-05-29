<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Modules\Blog\Models\BlogPost */
class BlogPostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'published_date' => $this->published_date,
            'category_id' => $this->category_id,
            'tags' => $this->tags,
            'header_image' => $this->header_image,

            'user_id' => $this->user_id,
            'user_id' => $this->user_id,
        ];
    }
}
