<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name'=>$this->faker->name,
            'phone'=> $this->faker->phoneNumber,
            'email'=> $this->faker->email,
            'password'=> $this->faker->password,
            'gender'=> $this->faker->randomElement( array : ['male', 'female']),
            'age'=> mt_rand(10, 100),
            'joindate'=> $this->faker->date("Y-m-d"),
            'address'=> $this->faker->address,
            'city'=> $this->faker->city,
            'state'=> $this->faker->state(),
            'country'=> $this->faker->country,
            'postcode'=> $this->faker->postcode,
            'photo'=> $this->faker->image,
            'description'=> $this->faker->text,

        ];
    }
}
