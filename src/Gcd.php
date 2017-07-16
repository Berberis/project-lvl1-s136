<?php

namespace BrainGames\Gcd;

use function \BrainGames\Cli\universalOutput;

function gcd()
{
    define(RULES_OF_THE_GAME, 'Find the greatest common divisor of given numbers.');

    $task = function () {
        $num1 = rand(1, 99);
        $num2 = rand(1, 99);
        return $num1 . ' ' . $num2;
    };

    function findGcd($num1, $num2)  //using Euclidean algorithm
    {
        while ($num1 <> 0 && $num2 <> 0) {
        if ($num1 > $num2) {
            $num1 = $num1 % $num2;
        } else {
            $num2 = $num2 % $num1;
          }
        }
        return abs($num1 + $num2);
    }

    $correctAnswer = function ($task) {
        list($num1, $num2) = explode(' ', $task);
        return findGcd($num1, $num2);
    };
    universalOutput($RULES_OF_THE_GAME, $task, $correctAnswer);
}
