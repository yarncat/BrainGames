<?php

namespace BrainGames\run;

use function cli\line;
use function cli\prompt;

function run($task, $generateGameData)
{
    $maxNumberRound = 3;
    line();
    line("Welcome to the Brain Games!");
    line();
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    line();
    line("{$task}");
    line();
    for ($i = 1; $i <= $maxNumberRound; $i++) {
        [$expression, $result] = $generateGameData();
        line("Question: {$expression}");
        $rightAnswer = $result;
        $answer = prompt("Your answer");
        if ($answer == $rightAnswer) {
            line("Correct!");
            line();
        } else {
            line();
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            line();
            return;
        }
    }
    line("Congratulations, %s!", $name);
    line();
}
