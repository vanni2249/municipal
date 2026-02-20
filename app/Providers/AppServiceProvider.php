<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Request::macro('department', function () {
            $firstSegment = null;
            $secondSegment = null;

            if (Request::routeIs('livewire.update')) {
                // Extraer de la URL real (Referer) para peticiones AJAX de Livewire
                $path = parse_url(Request::header('referer'), PHP_URL_PATH);
                $segments = explode('/', trim($path, '/'));

                $firstSegment = $segments[0] ?? null;
                $secondSegment = $segments[1] ?? null;
            } else {
                // Petición normal de Laravel
                $firstSegment = Request::segment(1);
                $secondSegment = Request::segment(2);
            }

            // Retornar el segmento 2 solo si el primero es 'admin'
            return ($firstSegment === 'admin') ? $secondSegment : null;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
