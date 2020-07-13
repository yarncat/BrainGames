<?php

namespace BrainGames\Even;

use function BrainGames\run\run;

function isEven($value)
{
    return $value % 2 === 0;
}

function runGame()
{
    $task = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    $round = function () {
        $expression = rand(1, 1000);
        $result = isEven($expression) ? "yes" : "no";
        $expressionResult = [$expression, $result];
        return $expressionResult;
    };
    run($task, $round);
}
