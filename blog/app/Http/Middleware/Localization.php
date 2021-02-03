<?php

namespace App\Http\Middleware;

use Closure, Session, Auth;

class Localization {

    /**
     * 언어 목록
     *
     * @array $languages
     */
    protected $languages = ['en','ko','jp','zh'];

    public function handle($request, Closure $next)
    {
        if(!Session::has('locale'))
        {
            Session::put('locale', $request->getPreferredLanguage($this->languages));
        }

        app()->setLocale(Session::get('locale'));

        if(!Session::has('statut'))
        {
            Session::put('statut', Auth::check() ?  Auth::user()->role->slug : 'visitor');
        }
        
        return $next($request);
    }

}