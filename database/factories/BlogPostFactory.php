<?php

namespace Database\Factories;

use App\Modules\Blog\Models\BlogPost;
use App\Modules\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'title' => $this->faker->word(),
            'content' => $this->faker->word(),
            'published_date' => Carbon::now(),
            'category_id' => $this->faker->randomNumber(),
            'tags' => $this->faker->words(),
            'header_image' => $this->faker->word(),

            'user_id' => User::factory(),
            'user_id' => User::factory(),
        ];
    }
}
