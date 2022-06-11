<?php

class SnakeAndLadder
{
    public $position = 0;           //initialise varibles
    public $diceNum = 0;

    function welcomeMsg()
    {
        echo "Welcome to snake and ladder game \n";
    }

    function gamePlay()
    {
        $this->position = 0;
        while ($this->position != 100) {                                    //UC4 while condition for repeating the play till winning position is reached
            $this->diceNum = rand(1, 6);
            echo "The dice number is : " . $this->diceNum . "\n";
            $options = rand(0, 2);
            switch ($options) {
                case 0:
                    echo "You have got a no play!!\nYour current position is " . $this->position . "\n";
                    $this->position = $this->position;
                    break;
                case 1:
                    echo "You are bit by a snake!!\n";                                  //if player position at snake bit then the position will be added 
                    $this->position = $this->position - $this->diceNum;                 //with dice number to avoid negative value
                    if ($this->position < 0) {
                        $this->position = $this->position + $this->diceNum;
                    }
                    echo "your current this->position is " . $this->position . "\n";
                    break;
                case 2:
                    echo "You have recahed a ladder:)\nYou can move ahead by $this->diceNum numbers.\n";
                    $this->position = $this->position + $this->diceNum;                                     // at ladder position the player moves by dice number value 
                    if ($this->position > 100) {                                                              // if player position goes above 100 then his position will 
                        $this->position = $this->position - $this->diceNum;                                //be moved back with dice number value 
                    }
                    echo "your current position is " . $this->position . "\n";
                    break;
            }
            echo "----------------------------------------------------------\n";                        // end condition!!! if player reached position 100, he wins the game
            if ($this->position == 100) {
                echo "You have reached position: $this->position.\nYou have won the game!!!!!\n-------------------Game Over------------------------\nThank you for playing the game. Have a nice day!!!\n";
            }
        }
    }
}
$play = new SnakeAndLadder();
$play->welcomeMsg();
$play->gamePlay();

?>