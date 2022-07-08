<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckAvailablePets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:pets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To Check Available pets and delete pets images folder if sale';

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

        app('App\Http\Controllers\PetController')->checkPetsCronJob();

        $this->info('Script successfully run');
    }
}
