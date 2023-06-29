<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CustomBladeDirectiveProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::directive('toMoney', function ($amount) {
            // return $amount;
            return str_replace(".", ',', number_format($amount, 2) . ' XAF');
        });
    }
}
