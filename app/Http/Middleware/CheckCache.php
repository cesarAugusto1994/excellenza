<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Config;
use App\Models\Banner;
use App\Models\Texto;
use App\Models\Pagina;

class CheckCache
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
        if (!$request->session()->has('config')) {
            $config = Config::findOrFail(1);
            $request->session()->put('config', $config);
        }

        if (!$request->session()->has('banner')) {
            $benner = Banner::where('status', 'S')->orderBy('ord')->get();
            $request->session()->put('banner', $benner);
        }

        if (!$request->session()->has('textos')) {
            $textos = Texto::findOrFail(1);
            $request->session()->put('textos', $textos);
        }

        if (!$request->session()->has('paginas')) {
            $paginas = Pagina::where('status', 'S')->orderBy('ord')->get();
            $request->session()->put('paginas', $paginas);
        }

        return $next($request);
    }
}
