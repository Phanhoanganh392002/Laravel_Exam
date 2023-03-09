<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->country(),
            'author_id'=>$this->faker->randomNumber(1,10),
            'title'=>$this->faker->title(),
            'ISBN'=>$this->faker->randomNumber(1,5),
            'pub_year'=>$this->faker->date(),
            'available'=>$this->faker->randomElement([0,1]),
        ];
    }
}
