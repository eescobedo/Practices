<?php namespace Katas;

class Addition implements Operation {
    
    /**
     * Perform the arithmetic
     * @param integer $number
     * @param integer $current
     * @return integer
     */
    public function run($number, $current)
    {
        return $current + $number;
    }
}