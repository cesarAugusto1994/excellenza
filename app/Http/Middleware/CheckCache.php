<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Config;
use App\Models\Banner;
use App\Models\Texto;
use App\Models\Pagina;
use App\Models\Empresa;
use App\Models\Equipe;

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

        if (!$request->session()->has('pagina_empresa')) {
            $pagina = Pagina::findOrFail(1);
            $request->session()->put('pagina_empresa', $pagina);
        }

        if (!$request->session()->has('pagina_clientes')) {
            $pagina = Pagina::findOrFail(2);
            $request->session()->put('pagina_clientes', $pagina);
        }

        if (!$request->session()->has('empresa')) {
            $empresa = Empresa::findOrFail(1);
            $request->session()->put('empresa', $empresa);
        }

        if (!$request->session()->has('equipes')) {
            $equipes = Equipe::where('ativo', true)->get();
            $request->session()->put('equipes', $equipes);
        }

        if(!$request->session()->has('google_api_key')) {
            $config = $request->session()->get('config')->google_api_key;
            $request->session()->put('google_api_key', $config);
        }

        if(!$request->session()->has('latitude')) {
            $config = $request->session()->get('config')->latitude;
            $request->session()->put('latitude', $config);
        }

        if(!$request->session()->has('longitude')) {
            $config = $request->session()->get('config')->longitude;
            $request->session()->put('longitude', $config);
        }

        if(!$request->session()->has('coordenadas')) {

            $latitude = $request->session()->get('latitude');
            $longitude = $request->session()->get('longitude');
            $googleApiKey = $request->session()->get('google_api_key');
            $endereco = $request->session()->get('config')->endereco;

            if($googleApiKey) {

              $geocode = file_get_contents('https://maps.google.com/maps/api/geocode/json?key='.$googleApiKey.'&address='.urlencode($endereco).'&sensor=false');
  						$output = json_decode($geocode);

  						if($output->status !== 'ZERO_RESULTS') {

                $lat = $output->results[0]->geometry->location->lat;
  							$long = $output->results[0]->geometry->location->lng;

                $request->session()->put('latitude', $lat);
                $request->session()->put('longitude', $long);
                $request->session()->put('coordenadas', [
                  'latitude' => $lat,
                  'longitude' => $long,
                ]);

  						}
            }
        }

        return $next($request);
    }
}
