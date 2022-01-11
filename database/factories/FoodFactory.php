<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'barcode' => $this->faker->isbn13(),
            'weight' => $this->faker->numberBetween(1, 1000),
            'unit' => $this->faker->randomElement(['g', 'ml']),
            'serving' => $this->faker->name(),
            'engergy' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
            'fat' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
            'of_which_saturates' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
            'carbohydrates' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
            'of_which_sugars' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
            'fiber' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
            'protein' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
            'salt' => json_encode(['100' => $this->faker->randomDigitNotNull(), 'serving' => $this->faker->randomDigitNotNull()]),
        ];
    }
}
