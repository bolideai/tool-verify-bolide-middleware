<?php

namespace Bolideai\VerifyBolide;

use Bolideai\VerifyBolide\Http\Middleware\VerifyBolide;
use Illuminate\Support\ServiceProvider;

class BolideAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bootMiddlewares();
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
