<?php

namespace BrainGames\Calc;

use function BrainGames\run\run;

function calculate($operand1, $operand2, $operator)
{
    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
    }
}

function runGame()
{
    $task = "What is the result of the expression?";
    $generateGameData = function () {
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];
        $expression = $operand1 . $operator . $operand2;
        $result = calculate($operand1, $operand2, $operator);
        $gameData = [$expression, $result];
        return $gameData;
    };
    run($task, $generateGameData);
}
