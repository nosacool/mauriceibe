<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cause;
use Illuminate\Support\Facades\View;

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
        //
    $causes = Cause::all();

    // Sharing is caring
    View::share('causes', $causes);
    }
}
