<?php

class Fibonacci implements IFibonacci
{

    public function getNumber(int $n): int
    {
        return round(pow((sqrt(5) + 1) / 2, $n) / sqrt(5));
    }
}
