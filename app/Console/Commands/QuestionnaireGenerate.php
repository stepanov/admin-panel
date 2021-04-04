<?php

namespace App\Console\Commands;

use App\Models\Questionnaire;
use Database\Factories\QuestionnaireFactory;
use Illuminate\Console\Command;

class QuestionnaireGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'questionnaire:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a one questionnaire';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $factory = new QuestionnaireFactory();
        $data = $factory->definition();

        $questionnaire = Questionnaire::create($data);

        $this->info('Questionnaire is generating ... ' . print_r($data, true) . " - new=" . print_r($questionnaire, true));
    }
}
