<?php

namespace App\Providers;

use App\Http\Services\CDiscountAPI;
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

        $this->app->singleton(CDiscountAPI::class, function ($app) {
            return new CDiscountAPI;
        });

        $this->app->bind('cdiscount', function ($app) {
            return app(CDiscountAPI::class);
        });

        Intervention::created(function ($intervention) {
            $intervention->createMetas();
        });

        view()->composer('*', function ($view) {
            $cdiscount = app('cdiscount');
            $cdiscount->setCartId(\Session::get('cartId', null));
            $cart = $cdiscount->getCart();
            if ($cart == null) {
                $view->with('cart_total', 0);
            } else {
                $view->with('cart_total', $cart->TotalPrice);
            }
        });
    }
}
