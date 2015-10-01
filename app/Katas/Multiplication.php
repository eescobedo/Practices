<?php namespace Katas;

class Multiplication implements Operation {
    
    /**
     * Perform the arithmetic
     * @param integer $number
     * @param integer $current
     * @return integer
     */
    public function run($number, $current)
    {

        if ( $current === 0 )
            return $number;

        return $number * $current;
    }
}