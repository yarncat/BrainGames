<?php

namespace BrainGames\Calc;

function makeCalculation()
{
    $task = "What is the result of the expression?\n";
    $answerArray = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $operators = ['+', '-', '*'];
        $operator = array_rand($operators);
        $expression = $operand1 . $operators[$operator] . $operand2;
        $result = eval('return ' . $expression . ';');
        $answerArray[$i]['expression'] = $expression;
        $answerArray[$i]['result'] = $result;
    }
    run($task, $answerArray);
}
