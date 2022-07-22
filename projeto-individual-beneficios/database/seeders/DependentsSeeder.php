<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DependentsSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Dependent::factory(10)->create();
    }
}
