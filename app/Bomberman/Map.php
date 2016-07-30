<?php

namespace App\Bomberman;
	
/**
 * Handles the bomberman map
 * 
 * @package Bomberman
 * @author Pavel Koch <kouks.koch@gmail.com>
 */
class Map
{
	/**
	 * Generates whole map
	 * 
	 * @param  Bool $echo Whether to echo the html
	 * @return String $html | void
	 */
	public static function generate($echo = true)
	{
		static::boxes();

		$html = '';

        for ($y = 0; $y < 13; $y++) {
	        for ($x = 0; $x < 17; $x++) {
				$html .= '<div class="tile ' . Tile::get($x, $y) . '"></div>';
	        }
        }

        if (!$echo)
        	return $html;

        echo $html;
	}

	/**
	 * Getting postion of the boxes
	 * 
	 * @return void 
	 */
	public static function boxes()
	{
		Tile::$field['box'] = [
			
		];
	}

}
