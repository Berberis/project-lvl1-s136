<?php

namespace BrainGames\Cli;
/*
function run()
{
echo 'Welcome to the Brain Game!', PHP_EOL;
echo 'May I have your name? ';

$name = trim(fgets(STDIN));
echo "Hello, {$name}!", PHP_EOL;
}
*/

use function \cli\line;

function run()
{
  line('Welcome to the Brain Games!');
  $name = \cli\prompt('May I have your name?');
  line("Hello, %s!", $name);
}
