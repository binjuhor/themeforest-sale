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
        $schedule->command('sale:update beautheme')->hourly();
        $schedule->command('sale:update awethemes')->hourly();
        $schedule->command('sale:update nootheme')->hourly();
        $schedule->command('sale:update 7uptheme')->hourly();
        $schedule->command('sale:update halothemes')->hourly();
        $schedule->command('sale:update villatheme')->hourly();
        $schedule->command('sale:update opal_wp')->hourly();
        $schedule->command('sale:update boostifythemes')->hourly();
        $schedule->command('sale:update like-themes')->hourly();
        $schedule->command('sale:update themefusion')->hourly();
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
