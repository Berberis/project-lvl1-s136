<?php

namespace BrainGames\Calc;

use function \BrainGames\Cli\universalOutput;

function calc()
{
    $RULES_OF_THE_GAME = 'What is the result of the expression?';

    $task = function () {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        switch (rand(0, 2)) {
            case 0:
                return $num1 . ' + ' . $num2;
            case 1:
                return $num1 . ' * ' . $num2;
            default:
                return $num1 . ' - ' . $num2;
        }
      };

      function calculate($num1, $num2, $operation)
      {
          switch ($operation) {
              case '+':
                  return $num1 + $num2;
              case '*':
                  return $num1 * $num2;
              default:
                  return $num1 - $num2;
          }
      }

    $correctAnswer = function ($task) {
        list($num1, $operation, $num2) = explode(' ', $task);
        return calculate($num1, $num2, $operation);
    };

    universalOutput($RULES_OF_THE_GAME, $task, $correctAnswer);
}
