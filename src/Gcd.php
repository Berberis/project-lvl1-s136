<?php

namespace BrainGames\Gcd;

use function \BrainGames\Cli\universalOutput;

function gcd()
{
    $RULES_OF_THE_GAME = 'Find the greatest common divisor of given numbers.';

    $task = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        return ($num1, $num2);
        }
      };

    $number = function () {
        return rand(1, 99);
    };
    function isEven($num)
    {
        return ($num % 2) === 0;
    }

    $correctAnswer = function ($task) {
        return calculate($num1, $num2);
    };

    universalOutput($RULES_OF_THE_GAME, $task, $correctAnswer);
}
