<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CacheControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Don't cache if authenticated or POST/PUT/DELETE request
        if ($request->user() || in_array($request->method(), ['POST', 'PUT', 'DELETE'])) {
            $response->headers->set('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');
            return $response;
        }

        // Set cache headers for static assets
        $path = $request->path();
        $extension = pathinfo($path, PATHINFO_EXTENSION);
        
        $staticAssets = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'ico', 'woff', 'woff2', 'ttf', 'eot'];
        
        if (in_array($extension, $staticAssets)) {
            $response->headers->set('Cache-Control', 'public, max-age=31536000'); // 1 year
            $response->headers->set('Pragma', 'public');
            
            // Set ETag for cache validation
            if (!$response->headers->has('ETag')) {
                $response->setEtag(md5($response->getContent()));
            }
            
            // Set Last-Modified if not already set
            if (!$response->headers->has('Last-Modified')) {
                $response->setLastModified(new \DateTime());
            }
        } else {
            // For HTML and other dynamic content
            $response->headers->set('Cache-Control', 'public, max-age=3600'); // 1 hour
        }

        return $response;
    }
}
