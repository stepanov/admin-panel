<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

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
        Log::info('Questionnaire is generating ...');
        $this->info('Questionnaire is generating ...');
    }
}
