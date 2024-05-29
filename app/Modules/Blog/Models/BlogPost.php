<?php

namespace App\Modules\Blog\Models;

use App\Modules\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'user_id',
        'user_id',
        'title',
        'content',
        'published_date',
        'category_id',
        'tags',
        'header_image',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts()
    {
        return [
            'published_date' => 'datetime',
            'tags' => 'array',
        ];
    }
}
