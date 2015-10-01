<?php namespace Katas;

class Calculator {

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