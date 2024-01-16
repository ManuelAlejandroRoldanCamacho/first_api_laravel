<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\User;
use App\Models\Article;
use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
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
            'text' => $this->text,
            'user' => User::find($this->user_id),
			'article' => Article::find($this->article_id),
            'created_at' => $this->created_at,
        ];
    }
}
