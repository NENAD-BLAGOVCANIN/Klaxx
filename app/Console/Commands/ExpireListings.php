<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Listing;
use Carbon\Carbon;

class ExpireListings extends Command
{
    protected $signature = 'listings:expire';
    protected $description = 'Check for listings older than 5 minutes and mark them as expired';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        \Log::info('Checking for expired listings');

        $expiredTime = Carbon::now()->subMinutes(5);

        Listing::where('created_at', '<=', $expiredTime)
            ->where('status', '!=', 'expired')
            ->update(['status' => 'expired']);

        $this->info('Listings older than 5 minutes have been marked as expired.');
    }
}
