<?php

namespace KaanTanis\Koza;

use Illuminate\Support\ServiceProvider;

class KozaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register()
    {
        $this->app->bind('layout', function ($app) {
            return new Layout();
        });
    }
}
