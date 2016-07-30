<?php
	
namespace App\Bomberman;

use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;

/**
 * ServerCommunication fetches data from clients and sends responses
 * 
 * @package Bomberman
 * @author Michael Bausano
 */
class ServerCommunication implements MessageComponentInterface
{		
	protected $clients;

	/**
	 * Class constructor
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->clients = new \SplObjectStorage;
	}

	/**
	 * Event trigged on user action
	 * 
	 * @param  ConnectionInterface $from User triggering an action
	 * @param  Array $json Object with action data
	 * @return void
	 */
	public function onMessage(ConnectionInterface $from, $json)
	{
		$data = json_decode($json);

		// Data managining and getting a json response
		$response = $json;

		// Returning a json response to all clients
		foreach ($this->clients as $client) {
			$client->send($response);
		}
	}

	/**
	 * Event triggered on new user connection
	 * 
	 * @param  ConnectionInterface $client User connecting to the server
	 * @return void
	 */
	public function onOpen(ConnectionInterface $client)
	{
		$this->clients->attach($client);
	}

	/**
	 * Event triggered on user leaving
	 * 
	 * @param  ConnectionInterface $client User leaving the server
	 * @return void
	 */
	public function onClose(ConnectionInterface $client)
	{
		$this->clients->detach($client);
	}

	/**
	 * Event triggered by error
	 * 
	 * @param  ConnectionInterface $client User reporting an error
	 * @param  Exception $e Exception sent 
	 * @return void
	 */
	public function onError(ConnectionInterface $client, \Exception $e)
	{
		// Saves error message to log
		$file = new \App\Helpers\File(\Config::get('app.log_file'));
		$file->addLine(
		 	'['.date('Y-m-d H:i:s').']: ' . $e->getMessage()
		)->save();

		// Closing connection with user
		$client->close();
	}
}
