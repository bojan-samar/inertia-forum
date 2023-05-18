<?php

namespace BojanSamar\InertiaForum;

use Illuminate\Support\ServiceProvider;

class InertiaForumServiceProvider extends ServiceProvider
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
        echo 'musa pusa';
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
