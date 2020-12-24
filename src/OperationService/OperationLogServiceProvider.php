<?php


namespace Record\OperationService;


use Illuminate\Support\ServiceProvider;

class OperationLogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Record\OperationService\Contracts\OperationLogServiceInterface', function ($app) {
            return new OperationLogService();
        });
    }
}