<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use App\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

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
        setlocale(LC_TIME,'fr_FR.utf8', 'fr');
        User::observe(UserObserver::class);
        Schema::defaultStringLength(191);
    }
}
