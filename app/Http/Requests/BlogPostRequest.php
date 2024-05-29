<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'exists:users'],
            'title' => ['required'],
            'content' => ['required'],
            'published_date' => ['nullable', 'date'],
            'category_id' => ['required', 'integer'],
            'tags' => ['nullable'],
            'header_image' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
