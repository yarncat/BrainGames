<?php

namespace BrainGames\Progression;

function getArithmeticProgression($num, $diff)
{
    $arithmeticProgression = [];
    for ($i = 0; $i < 10; $i++) {
        $num = $num + $diff;
        $arithmeticProgression[] = $num;
    }
    return $arithmeticProgression;
}

function getProgression()
{
    $task = "What number is missing in the progression?\n";
    $answerArray = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $number = rand(1, 100);
        $difference = rand(1, 10);
        $arithmeticProgression = getArithmeticProgression($number, $difference);
        $lostNumberIndex = array_rand($arithmeticProgression);
        $result = $arithmeticProgression[$lostNumberIndex];
        $arithmeticProgression[$lostNumberIndex] = '..';
        $expression = implode(' ', $arithmeticProgression);
        $answerArray[$i]['expression'] = $expression;
        $answerArray[$i]['result'] = $result;
    }
    run($task, $answerArray);
}
