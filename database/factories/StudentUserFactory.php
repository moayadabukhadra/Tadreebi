<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentUserFactory extends Factory
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
            'role'=>'student',
        ]);

        return [
            'user_id'=>$user->id,
            'name'=>$this->faker->word(),
            'email'=>$this->faker->email(),
            'password'=>$this->faker->password(),
            'factualy'=>$this->faker->word(),
            'gpa'=>$this->faker->randomFloat(2,0,4),
        ];
    }
}
