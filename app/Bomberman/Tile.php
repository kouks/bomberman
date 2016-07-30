<?php

namespace App\Bomberman;

class Tile
{
	/**
	 * Field contents
	 *
	 * @var Array field
	 */
	protected static $field = [
		'wall' => [ 
			 17,  19,  21,  23,  25,  27,  29,
			 47,  49,  51,  53,  55,  57,  59,
			 77,  79,  81,  83,  85,  87,  89,
			107, 109, 111, 113, 115, 117, 119,
			137, 139, 141, 143, 145, 147, 149,
			167, 169, 171, 173, 175, 177, 179,
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
    	$number = (15 * $y) + ++$x;
    	foreach (static::$field as $class => $fields) {
    		if (in_array($number, $fields)) {
    			return $class;
    		}
    	}
    	return 'floor';
    }
}
