<?php namespace Maka\Dataset;

use Illuminate\Support\ServiceProvider;

class DatasetServiceProvider extends ServiceProvider {

    
    
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('dataset', function ($app) {
            return Dataset::bootstrap($app);
        });
    }
    


}
