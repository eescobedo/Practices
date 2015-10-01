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
//        $this->assertSame(0, $this->calculator->calculate());
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
//        $this->calculator->add(5);
//        $this->assertEquals(5, $this->calculator->getResult());
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
//        $this->calculator->add('five');
        $this->calculator->setOperands('five');
        $this->calculator->setOperation(new Addition());
        $result = $this->calculator->calculate();
    }

    /**
     * @group refactor
     */
    public function test_accepts_multiple_args()
    {
//        $this->calculator->add(1, 2, 3, 4);
//
//        $this->assertEquals(10, $this->calculator->getResult());
//        $this->assertNotEquals('Snoop Doggy Dogg and Dr. Dre is at the door', $this->calculator->getResult());

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
//        $this->calculator->subtract(3);
//        $this->assertSame(-3, $this->calculator->getResult());

        $this->calculator->setOperands(3);
        $this->calculator->setOperation(new Subtraction());
        $result = $this->calculator->calculate();

        $this->assertEquals(-3, $result);
    }

    /**
     * @group refactor
     */
    public function test_multiplies_numbers()
    {
        //        $this->calculator->subtract(3);
        //        $this->assertSame(-3, $this->calculator->getResult());

        $this->calculator->setOperands(3, 2, 3);
        $this->calculator->setOperation(new Multiplication());
        $result = $this->calculator->calculate();

        $this->assertEquals(18, $result);
    }

}
