<?php

namespace BrainGames\Progression;

use function BrainGames\run\run;

function getArithmeticProgression($firstNumberProgression, $difference)
{
    $arithmeticProgression = [];
    $progressionLength = 10;
    $arithmeticProgression[] = $firstNumberProgression;
    $nextNumberProgression = $firstNumberProgression;
    for ($i = 1; $i < $progressionLength; $i++) {
        $nextNumberProgression = $nextNumberProgression + $difference;
        $arithmeticProgression[] = $nextNumberProgression;
    }
    return $arithmeticProgression;
}

function runGame()
{
    $task = "What number is missing in the progression?";
    $round = function () {
        $firstNumberProgression = rand(1, 100);
        $difference = rand(1, 10);
        $arithmeticProgression = getArithmeticProgression($firstNumberProgression, $difference);
        $lostNumberIndex = array_rand($arithmeticProgression);
        $result = $arithmeticProgression[$lostNumberIndex];
        $arithmeticProgression[$lostNumberIndex] = '..';
        $expression = implode(' ', $arithmeticProgression);
        $expressionResult = [$expression, $result];
        return $expressionResult;
    };
    run($task, $round);
}
