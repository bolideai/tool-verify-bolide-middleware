<?php

namespace Bolideai\VerifyBolide;

/**
 * Utilities and helpers used in various parts of the package.
 */
class Util
{
    /**
     * Combined secret key
     *
     * @return string
     */
    public static function combinedKey(): string
    {
        return config('microservice.main_app_key') . config('microservice.shopify_app_key');
    }
}
