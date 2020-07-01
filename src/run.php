<?php

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function run($task, $answerArray)
{
    line("\nWelcome to the Brain Game!\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);
    line($task);
    for ($i = 1; $i <= ROUNDS; $i++) {
        line("Question: {$answerArray[$i]['expression']}");
        $rightAnswer = $answerArray[$i]['result'];
        $answer = prompt("Your answer");
        if ($answer == $rightAnswer) {
            line("Correct!\n");
        } else {
            line("\n'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!\n", $name);
            return;
        }
    }
    line("Congratulations, %s!\n", $name);
}
