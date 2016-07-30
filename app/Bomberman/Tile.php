<?php

namespace App\Bomberman;

/**
 * Handling single map tile
 * 
 * @author Pavel Koch <kouks.koch@gmail.con>
 * @package Bomberman
 */
class Tile
{

	/**
	 * Field contents
	 *
	 * @var Array field
	 */
	public static $field = [
		'wall' => [ 
			1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
			 18,  34,
			 35,  37,  39,  41,  43,  45,  47,  49,  51,
			 52,  68, 
			 69,  71,  73,  75,  77,  79,  81,  83,  85,
			 86,  102,
			103, 105, 107, 109, 111, 113, 115, 117, 119,
			120, 136, 
			137, 139, 141, 143, 145, 147, 149, 151, 153, 
			154, 170, 
			171, 173, 175, 177, 179, 181, 183, 185, 187, 
			188, 204, 
			205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221,
		]
	];		

    /**
     * Returns tile class based on the coords
     * 
     * @param  Int $x X coord
     * @param  Int $y Y coord
     * @return String $class Name of the class
     */
    public static function get($x, $y)
    {
    	$number = (17 * $y) + ++$x;
    	foreach (static::$field as $class => $fields) {
    		if (in_array($number, $fields)) {
    			return $class;
    		}
    	}
    	return 'floor';
    }
}
