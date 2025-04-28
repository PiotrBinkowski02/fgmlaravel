<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\NavController;

class ViewServiceProvider extends ServiceProvider
{

    public function boot()
    {
        View::composer('partials.nav', function ($view) {
            $view->with('menuData', NavController::getMenuData());
        });
    }
}
