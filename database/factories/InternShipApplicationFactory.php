<?php

namespace Database\Factories;

use App\Models\CompanyUser;
use App\Models\internShipPost;
use App\Models\StudentUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternShipApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'student_user_id'=>StudentUser::factory(),
           'intern_ship_post_id'=>internShipPost::factory(),
           'cover_letter'=>$this->faker->text,
           'status'=>false,
        ];

    }
}
