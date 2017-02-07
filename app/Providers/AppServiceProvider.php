<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


/* <Para MySQL < v5.7.7> */
class AppServiceProvider extends ServiceProvider
/* </Para MySQL < v5.7.7> */
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* <Para MySQL < v5.7.7> */
        Schema::defaultStringLength(191);
        /* </Para MySQL < v5.7.7> */
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
