<?php

namespace BrainGames\Cli;

use function \cli\line;

//use normalize

function run()
{
    line('Welcome to the Brain Games!');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function universalOutput($rules, $question, $correctAnswer)
{
    line('Welcome to the Brain Game!');
    line($rules . PHP_EOL);
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($i = 0; $i < 3; $i++) {
           $task = $question();
           line("Question: %s", $task);
           $answer = \cli\prompt('Your answer', 0);
           $correct = $correctAnswer($task);
           if ($correct == $answer) {
               line("Correct!");
           } else {
               line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correct);
               line('Try again, %s!', $name);
               return;
           }
      }
    line('Congratulations, %s!', $name);
    return;
}
