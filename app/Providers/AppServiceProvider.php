<?php

namespace App\Providers;

use App\View\Components\Navbar;
use App\View\Components\SelectInput;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('navbar', Navbar::class);
        Blade::component('select-input', SelectInput::class);
    }
}
