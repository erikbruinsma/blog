<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        $this->mapTenantRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */

    protected function mapWebRoutes() {
      foreach (config('tenancy.exempt_domains', []) as $domain) {
          Route::middleware('web')
              ->domain($domain)
              ->namespace($this->namespace)
              ->group(base_path('routes/web.php'));
      }
    }

    protected function mapTenantRoutes()
    {
        Route::prefix('tenant')
            ->middleware('tenant')
            ->namespace($this->namespace)
            ->group(base_path('routes/tenant.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
     protected function mapApiRoutes()
     {
         foreach (config('tenancy.exempt_domains', []) as $domain) {
             Route::prefix('api')
                 ->middleware('api')
                 ->domain($domain)
                 ->namespace($this->namespace)
                 ->group(base_path('routes/api.php'));
         }
     }
}
