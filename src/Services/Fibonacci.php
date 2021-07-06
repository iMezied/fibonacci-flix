<?php

namespace src\Services;

use src\Interfaces\IFibonacci;

/**
 * Fibonacci class
 */
class Fibonacci implements IFibonacci
{

    /**
     * calculate the fibonacci value for a number
     *
     * @param  int $n
     * @return int
     */
    public function getNumber(int $n): int
    {
        return $this->powerFormula($n);
        //return $this->recursiveFibonacci($n);
        //return $this->loopCalculation($n);
    }

    /**
     * Calculate the value by iterative the loop through the sequence
     *
     * @param  int $n
     * @return int
     */
    public function loopCalculation(int $n): int
    {
        if ($n == 0)
            return 0;
        if ($n == 1)
            return 1;
        $first = 0; // n0
        $second = 1; // n1
        $calculation = 0;
        for ($i = 2; $i <= $n; $i++) {
            $calculation = $first + $second;
            $first = $second;
            $second = $calculation;
        }
        return $calculation;
    }
    
    /**
     * Calculate the value by using recusive call
     *
     * @param  int $n
     * @return int
     */
    private function recursiveFibonacci(int $n): int
    {
        return $n <= 1 ? $n : $this->recursiveFibonacci($n - 1) + $this->recursiveFibonacci($n - 2);
    }
    
    /**
     * Calculating the value by using the power formula
     *
     * @param  int $n
     * @return int
     */
    private function powerFormula(int $n): int
    {
        return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
    }
}
