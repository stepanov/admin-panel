<?php

namespace Database\Seeders;

use App\Models\Questionnaire;
use Illuminate\Database\Seeder;

class QuestionnaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questionnaire::factory(10)->create();
    }
}
