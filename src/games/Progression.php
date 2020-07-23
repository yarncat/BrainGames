<?php

namespace BrainGames\Progression;

use function BrainGames\run\run;

function getArithmeticProgression($firstNumberProgression, $difference)
{
    $arithmeticProgression = [];
    $progressionLength = 10;
    for ($i = 0; $i < $progressionLength; $i++) {
        $arithmeticProgression[] = $firstNumberProgression + $difference * $i;
    }
    return $arithmeticProgression;
}

function runGame()
{
    $task = "What number is missing in the progression?";
    $generateGameData = function () {
        $firstNumberProgression = rand(1, 100);
        $difference = rand(1, 10);
        $arithmeticProgression = getArithmeticProgression($firstNumberProgression, $difference);
        $lostNumberIndex = array_rand($arithmeticProgression);
        $result = $arithmeticProgression[$lostNumberIndex];
        $arithmeticProgression[$lostNumberIndex] = '..';
        $expression = implode(' ', $arithmeticProgression);
        $gameData = [$expression, $result];
        return $gameData;
    };
    run($task, $generateGameData);
}
