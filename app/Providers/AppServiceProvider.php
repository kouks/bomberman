<?php

namespace App\Providers;

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $server = IoServer::factory(
	        new HttpServer(
	            new WsServer(
	                new \App\Bomberman\ServerCommunication()
	            )
	        ),
	        8080
    	);

    	$server->run();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
