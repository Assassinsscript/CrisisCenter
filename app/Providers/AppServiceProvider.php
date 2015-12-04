<?php

namespace App\Providers;

use App\Http\Services\StatsService;
use App\Intervention;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StatsService::class, function ($app) {
            return new StatsService;
        });

        $this->app->bind('stats', function ($app) {
            return app(StatsService::class);
        });

        Intervention::created(function ($intervention) {
            $intervention->createMetas();
        });
    }
}
