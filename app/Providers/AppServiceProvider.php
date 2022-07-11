<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();
        Relation::enforceMorphMap([
            'project' => 'App\Models\Project',
            'offer' => 'App\Models\Offer',
            'service' => 'App\Models\Service',
            'portfolio' => 'App\Models\Portfolio',
            'user' => 'App\Models\User',
        ]);
    }
}
