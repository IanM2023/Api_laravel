<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;

    // public function handle(Request $request, Closure $next)
    // {
    //     dump("Hey Trust the process");

    //     return parent::handle($request, $next);
    // }
}
