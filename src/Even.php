<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function isEven($value)
{
    return $value % 2 === 0;
}

function run()
{
    line("Welcome to the Brain Game!\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);
    line("Answer 'yes' if the number is even, otherwise answer 'no'.\n");
    $attempts = 3;
    for ($i = 1; $i <= $attempts; $i++) {
        $number = rand(1, 1000);
        line("Question {$number}");
        $answer = prompt("Your answer");
        $result = isEven($number) ? "yes" : "no";
        if ($answer === $result) {
            line("Correct!\n");
        } else {
            return line("'$answer' is wrong answer ;(. Correct answer was '$result'. Let's try again, %s!", $name);
        }
    }
    line("Congratulations, %s!", $name);
}
