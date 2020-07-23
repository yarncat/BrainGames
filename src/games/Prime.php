<?php

namespace BrainGames\Prime;

use function BrainGames\run\run;

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    $squareRoot = intval(sqrt($number));
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function runGame()
{
    $task = "Answer 'yes' if given number is prime. Otherwise answer 'no'";
    $generateGameData = function () {
        $expression = rand(1, 100);
        $result = isPrime($expression) ? "yes" : "no";
        $gameData = [$expression, $result];
        return $gameData;
    };
    run($task, $generateGameData);
}
