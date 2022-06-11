<?php

class SnakeAndLadder
{
    public $position = 0;           //initialize varibles
    public $diceNum = 0;
    public $diceCount = 0;

    function welcomeMsg()
    {
        echo "Welcome to snake and ladder game \n";
    }

    function gamePlay()
    {
        $this->position = 0;
        while ($this->position != 100) {                                    //UC4 while condition for repeating the play till winning position is reached
            $this->diceCount++;                                             // UC 6dice role count
            echo "Dice count :" . $this->diceCount . "\n";
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
                    echo "your current position is " . $this->position . "\n";
                    break;
                case 2:
                    echo "You have recahed a ladder:)\nYou can move ahead by $this->diceNum numbers.\n";
                    $this->position = $this->position + $this->diceNum;                                     // at ladder position the player moves by dice number value 
                    if ($this->position > 100) {                                                              // UC5 if player position goes above 100 then his position will 
                        $this->position = $this->position;                                                     //be same untill he gets the value to reach 100 
                    }
                    echo "your current position is " . $this->position . "\n";
                    break;
            }
            echo "----------------------------------------------------------\n";                        // end condition!!! if player reached position 100, he wins the game
            if ($this->position == 100) {
                echo "You have reached position: $this->position.\nYou have won the game!!!!!\n-------------------Game Over------------------------\n";
                echo "The number of times the dice rolled is " . $this->diceCount;                               // UC6 the total number of times dice rolled
                echo "Thank you for playing the game. Have a nice day!!!\n";
            }
        }
    }
}
$play = new SnakeAndLadder();
$play->welcomeMsg();
$play->gamePlay();

?>