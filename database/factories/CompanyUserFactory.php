<?php

namespace Database\Factories;

use App\Models\Industry;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $user=User::create([
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'password'=>$this->faker->password(),
            'role'=>'company',
        ]);

        return [
            'user_id'=>$user->id,
            'name' => $this->faker->word,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'adress' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->url,
            'description' => $this->faker->text,
            'industry_id' => Industry::factory(),

        ];
    }
}
