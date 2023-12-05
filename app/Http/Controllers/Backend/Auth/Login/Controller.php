<?php

namespace App\Http\Controllers\Backend\Auth\Login;

use App\Http\Controllers\Backend\Controller as BackendController;

class Controller extends BackendController {
    
    /**
	 * Show login view
	 * @return \Illuminate\View
	*/
	public function view() {
		return view('backend.auth.login.view');
	}
    
}