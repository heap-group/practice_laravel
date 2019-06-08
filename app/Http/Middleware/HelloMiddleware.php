<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = [
            ['name' => 'taro', 'mail' => 'aaaa@xxx.com'],
            ['name' => 'hanako', 'mail' => 'aaaa@xxx.com'],
            ['name' => 'sachiko', 'mail' => 'aaaa@xxx.com'],
            ['name' => 'koba', 'mail' => 'aaaa@xxx.com'],
        ];

        $request->merge(['data' => $data]);
        return $next($request);
    }
}
