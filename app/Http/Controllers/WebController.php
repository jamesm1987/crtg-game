<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class WebController extends Controller {
    
    /**
     * @var \App\Models\User
    */
    protected $user = null;
    
    /**
     * Construct class
     * @return void
    */
    public function __construct() {
        
        $this->middleware(function ($request, $next) {
            $this->user = $request->user(($request->routeIs('backend.*') || $request->routeIs('ajax.backend.*')) ? 'backend' : null);
            return $next($request);
        });
        
    }
    
}