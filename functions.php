<?php

function sum(int $firstValue, int $secondValue) : int 
{
    return $firstValue + $secondValue;
}

function absoluteSum(int $firstValue, int $secondValue) : int
{
    return abs(sum($firstValue, $secondValue));
}

function substract(int $firstValue, int $secondValue) : int
{
    return sum($firstValue, $secondValue * -1);
}

function countdown(int $number) : array
{
    $result = [];

    for($i = $number; $i <= 0; $i--)
    {
        $result[] = $i;
    }

    return $result;
} 

function divide(int $number, int $divisor) : float
{
    return $number / $divisor;
}


function howManyLetters(string $sentence) : int 
{
    return str_replace(' ', '', trim(strlen($sentence)));
}
