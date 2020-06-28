<?php

use function cli\line;
use function cli\prompt;

const ATTEMPTS = 3;

function run($task, $answerArray)
{
    line("Welcome to the Brain Game!\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);
    line($task);
    for ($i = 1; $i <= ATTEMPTS; $i++) {
        line("Question {$answerArray[$i]['expression']}");
        $rightAnswer = $answerArray[$i]['result'];
        $answer = prompt("Your answer");
        if ($answer == $rightAnswer) {
            line("Correct!\n");
        } else {
            return line("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.\nLet's try again, %s!", $name);
        }
    }
    line("Congratulations, %s!", $name);
}
