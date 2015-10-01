<?php namespace Katas;

class Calculator {

//    protected $result = 0;
//
//    public function add()
//    {
//        $this->calculateAll(func_get_args(), '+');
//    }
//
//    public function subtract()
//    {
//        $this->calculateAll(func_get_args(), '-');
//    }
//
//    public function getResult()
//    {
//        return $this->result;
//    }
//
//    private function calculateAll(array $numbers, $symbol)
//    {
//        foreach ($numbers as $number)
//        {
//            $this->calculate($number, $symbol);
//        }
//    }
//
//    private function calculate($number, $symbol)
//    {
//        if ( ! is_numeric($number) )
//            throw new \InvalidArgumentException;
//
//        switch ($symbol)
//        {
//            case '+': $this->result += $number; break;
//            case '-': $this->result -= $number; break;
//        }
//    }

    protected $operation;
    protected $operands;
    protected $result = 0;

    public function setOperands()
    {
        $this->operands = func_get_args();
    }

    public function setOperation(Operation $operation)
    {
        $this->operation = $operation;
    }

    public function calculate()
    {
        foreach ($this->operands as $number)
        {
            if (!is_numeric($number))
                throw new \InvalidArgumentException;

            $this->result = $this->operation->run($number, $this->result);
        }

        return $this->result;
    }

}