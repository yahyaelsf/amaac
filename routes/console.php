<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use App\Console\Commands\GenerateMonthlyCommissions;
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
 //Schedule::command('commissions:generate')->daily();
//  Artisan::command(GenerateMonthlyCommissions::class);
