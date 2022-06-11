<?php

class SnakeAndLadder
{
    public $position = 0;

    function welcomeMsg()
    {
        echo "Welcome to snake and ladder game";
    }
}

$play = new SnakeAndLadder();
$play->welcomeMsg();