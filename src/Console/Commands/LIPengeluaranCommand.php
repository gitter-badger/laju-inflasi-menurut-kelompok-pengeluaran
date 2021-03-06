<?php namespace Bantenprov\LIPengeluaran\Console\Commands;

use Illuminate\Console\Command;

/**
 * The LIPengeluaranCommand class.
 *
 * @package Bantenprov\LIPengeluaran
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class LIPengeluaranCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:li-pengeluaran';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\LIPengeluaran package';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\LIPengeluaran package');
    }
}
