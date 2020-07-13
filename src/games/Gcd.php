<?php

namespace BrainGames\Gcd;

use function BrainGames\run\run;

function calculateGreatestCommonDivisor($number1, $number2)
{
    if ($number1 % $number2 === 0) {
            $result = $number2;
    }
    while ($number1 % $number2 !== 0) {
        $result = $number1 % $number2;
        $number1 = $number2;
        $number2 = $result;
    }
    return $result;
}

function runGame()
{
    $task = "Find the greatest common divisor of given numbers.";
    $round = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $expression = $number1 . ' ' . $number2;
        $result = calculateGreatestCommonDivisor($number1, $number2);
        $expressionResult = [$expression, $result];
        return $expressionResult;
    };
    run($task, $round);
}
