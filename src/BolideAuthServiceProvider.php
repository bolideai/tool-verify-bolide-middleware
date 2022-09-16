<?php

namespace Bolideai\VerifyBolide;

use Bolideai\VerifyBolide\Http\Middleware\VerifyBolide;
use Illuminate\Support\ServiceProvider;

class BolideAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bootConfig();
        $this->bootMiddlewares();
    }

    /**
     * Boot the config for the package.
     *
     * @return void
     */
    private function bootConfig(): void
    {
        $this->publishes([
            __DIR__ . '/../config/microservice.php' => config_path('microservice.php'),
        ]);
    }

    /**
     * Boot the middlewares for the package.
     *
     * @return void
     */
    private function bootMiddlewares(): void
    {
        $this->app['router']->aliasMiddleware('verify.bolide', VerifyBolide::class);
    }
}
