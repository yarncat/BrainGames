<?php

namespace BrainGames\Prime;

function isPrime($number)
{
    $squareRoot = intval(sqrt($number));
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $task = "Answer 'yes' if given number is prime. Otherwise answer 'no'\n";
    $answerArray = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $expression = rand(1, 1000);
        $result = isPrime($expression) ? "yes" : "no";
        $answerArray[$i]['expression'] = $expression;
        $answerArray[$i]['result'] = $result;
    }
    run($task, $answerArray);
}
