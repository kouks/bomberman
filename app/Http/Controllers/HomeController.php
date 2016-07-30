<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

	/**
	 * Handles index action
	 * 
	 * @return View $view The view
	 */
	public function index()
	{
		return view('home');
	}

    /**
     * Handles the game page
     * 
     * @param  Request $request The http request
     * @return View $view The view
     */
    public function game(Request $request)
    {
    	return view('game', [


    	]);
    }

    /**
     * Runs the server
     * 
     * @return void
     */
    public function server()
    {
    	//
    }
}
