<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RequestLog
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (\Illuminate\Http\Response|RedirectResponse) $next
     * @return \Illuminate\Http\Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (defined('LARAVEL_START') and $response instanceof Response) {
            $response->headers->add(['X-RESPONSE-TIME' => microtime(true) - LARAVEL_START]);}

        return $next($request);
    }

    public function terminate($request, $response)
    {

        Log::info('app.requests',
        [
            'method' => $request->getMethod(),
            'date' => date('d-m-y h:i:s'),
            'url'=> $request->fullUrl(),
            'response' => $response,
            'seconds' => microtime(true) - LARAVEL_START
        ]);

    }
}
