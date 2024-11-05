<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->word(),
            'serial number'=> fake()->word(),
            'published at'=> fake()->dateTime(),
            'author_id'=> \App\Models\Author::factory(),
            // 'author_name'=> fake()->name(),

        ];
    }
}
