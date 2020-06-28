<?php

namespace BrainGames\Calc;

function calculation()
{
    $task = "What is the result of the expression?\n";
    $answerArray = [];
    for ($i = 1; $i <= ATTEMPTS; $i++) {
        $operand1 = rand(1, 100);
        $operand2 = rand(1, 100);
        $arrayOperators = ['+', '-', '*'];
        $operator = array_rand($arrayOperators);
        $expression = $operand1 . $arrayOperators[$operator] . $operand2;
        $result = eval('return ' . $expression . ';');
        $answerArray[$i]['expression'] = $expression;
        $answerArray[$i]['result'] = $result;
    }
    run($task, $answerArray);
}
