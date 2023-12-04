<?php

namespace App\Providers;

use App\Repositories\ExerciceEloquentORM;
use App\Repositories\ExerciceRepositoryInterface;
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
        $this->app->bind(
            ExerciceRepositoryInterface::class, 
            ExerciceEloquentORM::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
