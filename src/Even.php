<?php

namespace BrainGames\Even;

use function \BrainGames\Cli\universalOutput;

function even()
{
  //define ('RULES_OF_THE_GAME', 'Answer "yes" if number even, otherwise answer "no".');
    $RULES_OF_THE_GAME = 'Answer "yes" if number even, otherwise answer "no".';

    $number = function () {
        return rand(1, 99);
    };
    function isEven($num)
    {
        return ($num % 2) === 0;
    }
    $correctAnswer = function ($number) {
        return (isEven((int)$number)) ? 'yes' : 'no';
    };

    universalOutput($RULES_OF_THE_GAME, $number, $correctAnswer);
}
