<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(mt_rand(2, 4)),
            'penulis' => fake()->name(),
            'penerbit' => 'PT ' . $this->faker->company(),
            'stok' => fake()->numberBetween(1, 20),
            'tgl_terbit' => fake()->date('Y-m-d'),
        ];
    }
}
