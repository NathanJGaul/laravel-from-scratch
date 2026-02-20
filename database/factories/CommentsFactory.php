<?php

namespace Database\Factories;

use App\Models\Comments;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CommentsFactory extends Factory
{
    protected $model = Comments::class;

    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomNumber(),
            'body' => $this->faker->word(),
            'post_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
