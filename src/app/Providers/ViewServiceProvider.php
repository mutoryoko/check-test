<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //エラーを解消するため、一旦ここに記載
        View::composer(
            ['index','auth.admin'],
            function ($view) {
                $view->with('categories', Category::all());
            }
        );
    }
}
