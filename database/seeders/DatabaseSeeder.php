<?php

namespace Database\Seeders;

use Database\Seeders\QuestionnaireTableSeeder;
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
        $this->call(QuestionnaireTableSeeder::class);
    }
}
