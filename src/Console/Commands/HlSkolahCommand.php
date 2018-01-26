<?php namespace Bantenprov\HlSekolah\Console\Commands;

use Illuminate\Console\Command;

/**
 * The HlSekolahCommand class.
 *
 * @package Bantenprov\HlSekolah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class HlSekolahCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:hl-sekolah';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\HlSekolah package';

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
        $this->info('Welcome to command for Bantenprov\HlSekolah package');
    }
}
