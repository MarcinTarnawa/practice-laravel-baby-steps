<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
       View::composer('*', function ($view) {
        $menu = [
            ['id' => 1, 'title' => 'Home', 'href' => '/'],
            ['id' => 2, 'title' => 'Contact', 'href' => '/contact'],
            ['id' => 3, 'title' => 'About', 'href' => '/about'],
            ['id' => 4, 'title' => 'Weather', 'href' => '/weather'],
            ['id' => 5, 'title' => 'Product', 'href' => '/product'],
        ];
        $view->with('menu', $menu);
    });
    }
}
