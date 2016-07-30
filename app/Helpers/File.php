<?php
	
namespace App\Helpers;

/**
 * Handling a file
 * 
 * @package Helpers
 * @author Michael Bausano
 */
class File
{
	protected $file;

	protected $path;

	/**
	 * Class constructor
	 * 
	 * @param  string $path Path to the file
	 * @param  bool $create Creates file if it doesn't exist
	 * @return void
	 */
	public function __construct($path, $create = true)
	{
		$this->path = $path;
		if(file_exists($path)) {
			$this->file = file_get_contents($path);
		} else {
			$this->file = '';
		}
	}

	/**
	 * Appends line
	 * 
	 * @param  string $string Line contents
	 * @return File $this
	 */
	public function addLine($string)
	{
		$this->file .= "\n" . $string;

		return $this;
	}

	/**
	 * Saves file
	 * 
	 * @return true | false
	 */
	public function save()
	{
		if(file_put_contents($this->path, $this->file)) {
			return true;
		} else {
			return false;
		}
	}
}
