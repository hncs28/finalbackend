<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    
    public function handle($request, Closure $next)
    {
        //Intercepts OPTIONS requests
        if ($request->isMethod('OPTIONS')) {
            $response = response('', 200);
        } else {
            // Pass the request to the next middleware
            $response = $next($request);
        }

        $IlluminateResponse = 'Illuminate\Http\Response';
        $SymfonyResopnse = 'Symfony\Component\HttpFoundation\Response';

        $headers = [
            'Access-Control-Allow-Origin' => 'https://somedia-five.vercel.app',
            'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, PATCH, DELETE',
            'Access-Control-Allow-Headers' => 'Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Authorization , Access-Control-Request-Headers',
            'Access-Control-Allow-Credentials' => 'true',
        ];
        // Adds headers to the response
        # Laravel
        if ($response instanceof $IlluminateResponse) {
            $response->header('Access-Control-Allow-Methods', 'HEAD, GET, POST, PUT, PATCH, DELETE');
            $response->header('Access-Control-Allow-Headers', $request->header('Access-Control-Request-Headers'));
            $response->header('Access-Control-Allow-Origin', 'https://somedia-five.vercel.app');
            $response->header('Access-Control-Allow-Credentials', 'true');

            return $response;
        }

        # Symfony
        if ($response instanceof $SymfonyResopnse) {
            foreach ($headers as $key => $value) {
                $response->headers->set($key, $value);
            }
            return $response;
        }
        // Sends it
        return $response;
    }
}
