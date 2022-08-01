<?php

namespace Database\Seeders;

use App\Models\InternShipApplication;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        InternShipApplication::factory()->count(10)->create();
    }
}
