<?php

namespace Database\Seeders;

use App\Models\Resep;
use Illuminate\Database\Seeder;

class ResepSeeder extends Seeder
{
    public function run()
    {
        Resep::factory()->count(20)->create();
    }
}
