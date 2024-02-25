<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DeleteOldHighlights extends Command
{
    protected $signature = 'highlights:cleanup';
    protected $description = 'Delete highlights older than 24 hours';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $threshold = Carbon::now()->subDay();
        $deletedRows = DB::table('highlights')->where('created_at', '<', $threshold)->delete();
        $this->info("Deleted $deletedRows old highlights.");
    }
}
