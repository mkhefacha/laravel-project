<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use App\User;
use Illuminate\Support\Facades\view;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {

    }


    public function boot()
    {
        setlocale(LC_TIME, 'fr_FR.utf8', 'fr');
        User::observe(UserObserver::class);
        Schema::defaultStringLength(191);

        // -1-for single page
        // view::share('users',User::all()->take(10));

        //-2- with wildcards;
        view::composer('colect', function ($view)
        {
          $view->with('users',User::all()->take(10));

        });


    }
}
