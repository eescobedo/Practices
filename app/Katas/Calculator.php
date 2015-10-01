<?php namespace Katas;

class Calculator {

    protected $result = 0;

    public function add()
    {
        $this->calculateAll(func_get_args(), '+');
    }

    public function subtract()
    {
        $this->calculateAll(func_get_args(), '-');
    }

    public function multiply()
    {
        $this->calculateAll(func_get_args(), '*');
    }


    public function getResult()
    {
        return $this->result;
    }

    private function calculateAll(array $numbers, $symbol)
    {
        foreach ($numbers as $number)
        {
            $this->calculate($number, $symbol);
        }
    }

    private function calculate($number, $symbol)
    {
        if ( ! is_numeric($number) )
            throw new \InvalidArgumentException;

        switch ($symbol)
        {
            case '+':
                $this->result += $number;
                break;
            case '-':
                $this->result -= $number;
                break;
            case '*':
                $this->result = ($this->result === 0) ? $number : $this->result * $number;
                break;
        }
    }
}