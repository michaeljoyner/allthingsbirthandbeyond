<?php

namespace App\Console\Commands;

use App\Quotes\Quote;
use Illuminate\Console\Command;

class GetDailyQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quotes:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches the daily inspirational quote';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Quote $quote)
    {
        $quote->refresh([]);
    }
}
