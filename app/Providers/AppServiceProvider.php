<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
//use Illumniate\Support\Facades\Schema;
//use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLenght(191);
        //Resource::withoutWrapping();
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


    public function with($request) {
        return [
            'version' => '1.0.0'
        ];
    }
}
