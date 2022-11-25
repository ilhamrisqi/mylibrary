<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */
class WriterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name,
            "negara" => $this->faker->country,
            "deskripsi" => $this->faker->text,
            "image" => "foto1.jpg",
            "contact" => $this->faker->phoneNumber
        ];
    }
}
