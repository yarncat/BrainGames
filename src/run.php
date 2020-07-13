<?php

namespace BrainGames\run;

use function cli\line;
use function cli\prompt;

function run($task, $round)
{
    $newLine = "\n";
    $maxNumberRound = 3;
    line("%sWelcome to the Brain Game!%s", $newLine, $newLine);
    $name = prompt("May I have your name?");
    line("Hello, %s!%s", $name, $newLine);
    line("{$task}%s", $newLine);
    for ($i = 1; $i <= $maxNumberRound; $i++) {
        [$expression, $result] = $round();
        line("Question: {$expression}");
        $rightAnswer = $result;
        $answer = prompt("Your answer");
        if ($answer == $rightAnswer) {
            line("Correct!%s", $newLine);
        } else {
            line("%s'%s' is wrong answer ;(. Correct answer was '%s'.", $newLine, $answer, $rightAnswer);
            line("Let's try again, %s!%s", $name, $newLine);
            return;
        }
    }
    line("Congratulations, %s!%s", $name, $newLine);
}
