<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\SaleUpdate'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('sale:update beautheme --force')->hourly();
        $schedule->command('sale:update awethemes --force')->hourly();
        $schedule->command('sale:update nootheme --force')->hourly();
        $schedule->command('sale:update 7uptheme --force')->hourly();
        $schedule->command('sale:update halothemes --force')->hourly();
        $schedule->command('sale:update villatheme --force')->hourly();
        $schedule->command('sale:update opal_wp --force')->hourly();
        $schedule->command('sale:update boostifythemes --force')->hourly();
        $schedule->command('sale:update like-themes --force')->hourly();
        $schedule->command('sale:update themefusion --force')->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
