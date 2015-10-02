<?php

class GeneratorTest extends PHPUnit_Framework_TestCase
{


    public function it_works()
    {
        $file = new File();
        $generator = new Generator();

        $generator->fire();
    }


}