<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\ExpireListings::class, // Ensure your command is registered here
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('listings:expire')->everyFiveMinutes(); // Ensure the command is scheduled here
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands'); // Ensure this line exists to load your commands

        require base_path('routes/console.php');
    }
}
