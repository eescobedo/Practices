<?php

use Katas\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

    protected $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @group refactor
     */
    public function test_instance()
    {
        $this->calculator;
    }


    public function test_result_defaults_to_zero()
    {
        $this->assertSame(0, $this->calculator->getResult());
    }

    /**
     * @group refactor
     */
    public function test_adds_numbers()
    {
        $this->calculator->add(5);
        $this->assertEquals(5, $this->calculator->getResult());
    }

    /**
     * @group refactor
     * @expectedException InvalidArgumentException
     */
    public function test_requires_numeric_value()
    {
        $this->calculator->add('five');
    }

    /**
     * @group refactor
     */
    public function test_accepts_multiple_args()
    {
        $this->calculator->add(1, 2, 3, 4);

        $this->assertEquals(10, $this->calculator->getResult());
        $this->assertNotEquals('Snoop Doggy Dogg and Dr. Dre is at the door', $this->calculator->getResult());

    }

    /**
     * @group refactor
     */
    public function test_subtract()
    {
        $this->calculator->subtract(3);
        $this->assertSame(-3, $this->calculator->getResult());

    }

    /**
     * @group refactor
     */
    public function test_multiplies_numbers()
    {
        $this->calculator->multiply(3, 4, 5);
        $this->assertSame(60, $this->calculator->getResult());
    }

}
