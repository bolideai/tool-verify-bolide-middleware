<?php

namespace Bolideai\VerifyBolide\Http\Middleware;

use Bolideai\VerifyBolide\Util;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Hash;

class VerifyBolide
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $bolideHeader = $request->header('X-Header-BolideAI-Access');
        $result = $this->checkHeaderHash($bolideHeader);

        if (!$bolideHeader || !$result) {
            abort(403);
        }

        return $next($request);
    }

    /**
     * Check Header Hash
     *
     * @param string $incomingHeader
     * @return boolean
     */
    protected function checkHeaderHash(?string $incomingHeader): bool
    {
        return Hash::check(Util::combinedKey(), $incomingHeader);
    }
}
