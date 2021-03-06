<?php
namespace AgusRdz\GitHub\Providers;

use Illuminate\Support\ServiceProvider;
use AgusRdz\GitHub\GitHubManager;

class GitHubApiServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot()
    {
        //
    }

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
        $this->app['GitHubApi'] = $this->app->singleton('AgusRdz\GitHub\Contracts\GitHub', function($app) {
            return new GitHubManager();
        });
    }

    /**
    * Get the functions provided by the GitHub API
    * @return [type] [description]
    */
    public function provides()
    {
        return ['AgusRdz\GitHub\Contracts\GitHub'];
    }
}
