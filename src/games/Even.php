<?php

namespace BrainGames\Even;

function isEven($value)
{
    return $value % 2 === 0;
}

function even()
{
    $task = "Answer 'yes' if the number is even, otherwise answer 'no'.\n";
    $answerArray = [];
    for ($i = 1; $i <= ATTEMPTS; $i++) {
        $expression = rand(1, 1000);
        $result = isEven($expression) ? "yes" : "no";
        $answerArray[$i]['expression'] = $expression;
        $answerArray[$i]['result'] = $result;
    }
    run($task, $answerArray);
}
