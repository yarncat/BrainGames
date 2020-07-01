<?php

namespace BrainGames\Progression;

function arithmeticProgression($number1, $number2)
{
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $number1 = $number1 + $number2;
        $array[] = $number1;
    }
    return $array;
}

function progression()
{
    $task = "What number is missing in the progression?\n";
    $answerArray = [];
    for ($i = 1; $i <= ROUNDS; $i++) {
        $number1 = rand(1, 100);
        $number2 = rand(1, 10);
        $progressionArray = arithmeticProgression($number1, $number2);
        $lostMemberIndex = array_rand($progressionArray);
        $result = $progressionArray[$lostMemberIndex];
        $progressionArray[$lostMemberIndex] = '..';
        $expression = implode(' ', $progressionArray);
        $answerArray[$i]['expression'] = $expression;
        $answerArray[$i]['result'] = $result;
    }
    run($task, $answerArray);
}
