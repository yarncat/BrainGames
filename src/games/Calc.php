<?php

namespace BrainGames\Calc;

use function BrainGames\run\run;

function makeCalculation($operand1, $operand2, $operator)
{
    if ($operator === '+') {
        return $operand1 + $operand2;
    } elseif ($operator === '-') {
        return $operand1 - $operand2;
    } elseif ($operator === '*') {
        return $operand1 * $operand2;
    }
}

function runGame()
{
    $task = "What is the result of the expression?";
    $round = function () {
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];
        $expression = $operand1 . $operator . $operand2;
        $result = makeCalculation($operand1, $operand2, $operator);
        $expressionResult = [$expression, $result];
        return $expressionResult;
    };
    run($task, $round);
}
