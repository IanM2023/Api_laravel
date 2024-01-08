<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SayCheeseMiddleware
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
        // dump("Hey Cheeseburger");
        return $next($request);
        // return new JsonResponse([
        //     'Data' => 'CheeseeBurger',
        // ]);
    }

    public function terminate($request, $response)
    {
        dump('GoodBye');
    }
}
