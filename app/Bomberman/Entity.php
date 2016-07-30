<?php

namespace App\Bomberman;

/**
 * Parent class for dynamic objects
 * 
 * @package Bomberman
 * @author Michael Bausano
 */
class Entity
{

	/**
	 * Coords array
	 *
	 * @var array $coords
	 */
	public $coords = [
		'x' => null,
		'y' => null
	];

	/**
	 * Coordinations getter
	 * 
	 * @param  bool $string Returns coords in x:y string
	 * @return array | string
	 */
	public function getCoords($string = false)
	{
		return $string ? implode(':', $this->coords) : $this->coords;
	}

	/**
	 * Coordination getter
	 * 
	 * @return int
	 */
	public function getX()
	{
		return $this->coords['x'];
	}

	/**
	 * Coordination getter
	 * 
	 * @return int
	 */
	public function getY()
	{
		return $this->coords['y'];
	}

	/**
	 * Set coordinations
	 * 
	 * @param  array $coords Array with keys: 'x', 'y'
	 * @return $this
	 */
	public function setCoords($coords)
	{
		if(is_array($coords)) {
			$this->coords = array_merge($this->coords, $coords);
		}
	}
}
