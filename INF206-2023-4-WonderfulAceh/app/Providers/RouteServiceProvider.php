<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
<<<<<<< HEAD
    public const HOME = '/dashboard';
=======
    public const HOME = '/home';
>>>>>>> 2108107010025

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
<<<<<<< HEAD
=======

     protected $namespace = 'App\Http\\Controllers';
>>>>>>> 2108107010025
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
<<<<<<< HEAD
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
=======
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
>>>>>>> 2108107010025
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
