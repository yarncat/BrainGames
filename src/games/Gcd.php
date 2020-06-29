<?php

namespace BrainGames\Gcd;

function calculateGcd($number1, $number2)
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

function greatestCommonDivisor()
{
    $task = "Find the greatest common divisor of given numbers.\n";
    $answerArray = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $expression = "{$number1} {$number2}";
        $result = calculateGcd($number1, $number2);
        $answerArray[$i]['expression'] = $expression;
        $answerArray[$i]['result'] = $result;
    }
    run($task, $answerArray);
}
