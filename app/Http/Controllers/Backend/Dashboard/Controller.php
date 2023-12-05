<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Backend\Controller as BackendController;

class Controller extends BackendController {
    
    /**
	 * Show dashboard view
	 * @return \Illuminate\View
	*/
	public function view() {
		return view('backend.pages.dashboard.view');
	}
    
}