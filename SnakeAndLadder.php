<?php

class SnakeAndLadder
{
    public $position = 0;

    function welcomeMsg()
    {
        echo "Welcome to snake and ladder game \n";
    }

    function diceRoll()
    {
        $diceNum = rand(1, 6);
        echo "The dice number is : " . $diceNum . "\n";
    }
}

$play = new SnakeAndLadder();
$play->welcomeMsg();
$play->diceRoll();
