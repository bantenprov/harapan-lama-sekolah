<?php namespace Bantenprov\HlSekolah\Http\Middleware;

use Closure;

/**
 * The HlSekolahMiddleware class.
 *
 * @package Bantenprov\HlSekolah
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class HlSekolahMiddleware
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
        return $next($request);
    }
}
