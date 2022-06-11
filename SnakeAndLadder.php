<?php

class SnakeAndLadder
{
    public $position = 0;
    public $diceNum = 0;

    function welcomeMsg()
    {
        echo "Welcome to snake and ladder game \n";
    }

    // function diceRoll()
    // {
    //     $diceNum = rand(1, 6);
    //     echo "The dice number is : " . $diceNum . "\n";
    // }

    function gamePlay()
    {
        $diceNum = rand(1, 6);
        echo "The dice number is : " . $diceNum . "\n";
        $options = rand(0, 2);
        switch ($options) {
            case 0:
                echo "You have got a no play!!\nYou stay in the same position";
                break;
            case 1:
                echo "You are bit by a snake!!\n";
                $this->poistion = $this->position - $diceNum;
                if ($this->position < 0) {
                    $diceNum = 0;
                    $this->poistion = $this->position - $diceNum;
                }
                echo "your current position is " . $this->position;
                break;
            case 2:
                echo "You have recahed a ladder:)\nYou can move ahead by $diceNum numbers.";
                $this->poistion = $this->position + $diceNum;
                break;
        }
    }
}
$play = new SnakeAndLadder();
$play->welcomeMsg();
$play->gamePlay();