<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\User;
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
        //
        $user = User::where('id', 1)->first();
        view()->share('activeUser', $user);
        config(['app.locale' => 'id']);
        Carbon::setlocale('id');
    }
}
