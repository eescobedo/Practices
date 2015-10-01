<?php

use Katas\Addition;
use Katas\Calculator;
use Katas\Multiplication;
use Katas\Subtraction;

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
        $this->calculator->setOperands(0);
        $this->calculator->setOperation(new Addition());
        $result = $this->calculator->calculate();

        $this->assertEquals(0, $result);

    }

    /**
     * @group refactor
     */
    public function test_adds_numbers()
    {
        $this->calculator->setOperands(5);
        $this->calculator->setOperation(new Addition());
        $result = $this->calculator->calculate();

        $this->assertEquals(5, $result);
    }

    /**
     * @group refactor
     * @expectedException InvalidArgumentException
     */
    public function test_requires_numeric_value()
    {
        $this->calculator->setOperands('five');
        $this->calculator->setOperation(new Addition());
        $this->calculator->calculate();
    }

    /**
     * @group refactor
     */
    public function test_accepts_multiple_args()
    {
        $this->calculator->setOperands(1,2,3,4);
        $this->calculator->setOperation(new Addition());
        $result = $this->calculator->calculate();

        $this->assertEquals(10, $result);
    }

    /**
     * @group refactor
     */
    public function test_subtract()
    {
        $this->calculator->setOperands(3, 2, 3);
        $this->calculator->setOperation(new Subtraction());
        $result = $this->calculator->calculate();

        $this->assertEquals(-8, $result);
    }

    /**
     * @group refactor
     */
    public function test_multiplies_numbers()
    {
        $this->calculator->setOperands(3, 2, 3);
        $this->calculator->setOperation(new Multiplication());
        $result = $this->calculator->calculate();

        $this->assertEquals(18, $result);
    }

}
