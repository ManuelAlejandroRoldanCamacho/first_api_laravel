<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
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
			'title' => $this->title,
			'body' => $this->body,
			'user' => User::find($this->user_id),
			'category' => Category::find($this->category_id),
			'created_at' => $this->created_at,
        ];
    }
}
