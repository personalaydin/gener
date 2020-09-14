<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Request;
use Route;
use Exception;

class RedirectLocalization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function handle($request, Closure $next)
    {
        $firstSegment = Request::segment(1);
        $availableLocales = config('app.locales');

        // If first segment is equal to default locale then continue normal request
        if ($firstSegment == config('app.locale')) {
            return $next($request);
        }

        // Change locale
        if (isset($availableLocales[$firstSegment])) {
            App::setLocale($firstSegment);
        }

        // Redirect locale url
        try {
            Route::getRoutes()->match(Request::instance());
        } catch (Exception $e) {
            $createRequest = Request::create(App::getLocale().'/'.Request::path());

            // Check if target is not found?
            try {
                $tryThisURL = config('app.url').'/'.$createRequest->path();
                $client = new \GuzzleHttp\Client([
                    'verify' => false
                ]);
                $client->request('GET', $tryThisURL);
            } catch (\GuzzleHttp\Exception\BadResponseException $e) {
                if ($e->getResponse()->getStatusCode() == 404) {
                    return $next($request);
                }
            }

            return redirect($createRequest->path());
        }

        return $next($request);
    }
}
