<?php

namespace Bolideai\VerifyMicroservice;

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
        return config('microservices.auth_key') . config('shopify-app.api_key');
    }
}
