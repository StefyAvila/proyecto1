<?php

namespace Database\Seeders;

use App\Models\Honduco;
use App\Models\Comico;
use App\Models\Lego;

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
        // \App\Models\
       Honduco::factory(500)->create();
       Comico::factory(500)->create();
       Lego::factory(500)->create();
    }
}
