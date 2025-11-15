<?php

namespace App\Providers;

use App\Jobs\GenerateMonthlyCommissionsJob;
use App\Models\TSetting;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('t_system_settings')) {
            $settings = Cache::rememberForever('settings', function () {
                return TSetting::enabled()->pluck('s_value', 's_key')->toArray();
            });
            view()->share([
                'settings' => $settings,
            ]);
        }
        Artisan::call('optimize:clear');
        if (request()->has('ref')) {
            session(['referrer' => request()->get('ref')]);
        }
        //  if (Carbon::now()->hour === 0 && Carbon::now()->minute === 0) {
        //     $job = new GenerateMonthlyCommissionsJob();
        //     $job->handle();
        // }


    }
}
