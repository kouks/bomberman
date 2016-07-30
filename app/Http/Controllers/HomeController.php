<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Handles the index pag
     * 
     * @param  Request $request The http request
     * @return View $view The view
     */
    public function index(Request $request)
    {
    	return view('home', [


    	]);
    }
}
