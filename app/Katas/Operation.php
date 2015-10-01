<?php namespace Katas;

interface Operation {

    /**
     * Perform the arithmetic
     * @param integer $number
     * @param integer $current
     * @return integer
     */
    public function run($number, $current);
}