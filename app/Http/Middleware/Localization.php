<?php

namespace App\Http\Middleware;

use Closure;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // Make sure current locale exists.
        $locale = $request->segment(1);

        if (!in_array($locale, ['elfinder', 'login', 'admin', 'fm-button', 'file-manager', 'storage', 'livewire'])) {
            if (!array_key_exists($locale, app()->config->get('app.locales'))) {
                $segments = $request->segments();
                $segments[0] = app()->config->get('app.fallback_locale');

                return redirect()->to(implode('/', $segments));
            }

            app()->setLocale($locale);
        }


        return $next($request);
    }
}
