<?php

namespace Database\Factories;

use App\Models\CompanyUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternShipPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_users_id'=>CompanyUser::factory(),
            'title' => $this->faker->word,
            'description' => $this->faker->text,
            'is_active' => $this->faker->boolean(),
            'paid' => $this->faker->boolean(),
        ];
    }
}
