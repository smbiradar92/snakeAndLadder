<?php

class SnakeAndLadder
{
    public $diceNum = 0;
    public $diceCount = 0;
    public $player;

    function welcomeMsg()
    {
        echo "Welcome to snake and ladder game \n";
    }

    //calling the switch case function seperately for multiple users usage
    function diceRoll()
    {
        $this->diceNum = rand(1, 6);
        echo "The dice number is : " . $this->diceNum . "\n";
        $options = rand(0, 2);
        switch ($options) {
            case 0:
                echo "$this->player has got a no play!!\n$this->player current position is " . $this->position . "\n";
                $this->position = $this->position;
                break;
            case 1:
                echo "$this->player is bit by a snake!!\n";                                  //if player position at snake then the position will be subtracted by dice number 
                $this->position = $this->position - $this->diceNum;                         //if position is less then zero then position is added with dice number to avoid 
                if ($this->position < 0) {                                                  // negative value
                    $this->position = $this->position + $this->diceNum;
                }
                echo "$this->player current position is " . $this->position . "\n";
                break;
            case 2:
                echo "$this->player has reached a ladder:)\n$this->player can move ahead by $this->diceNum numbers.\n";
                $this->position = $this->position + $this->diceNum;                                     // at ladder position the player moves by dice number value 
                if ($this->position > 100) {                                                              // UC5 if player position goes above 100 then his position will 
                    $this->position = $this->position - $this->diceNum;                                         //be same untill he gets the value to reach 100 
                    echo "$this->player current position is " . $this->position . "\n";
                } else {
                    echo "$this->player can roll the die again\n";                              //UC7_if player gets a ladder then call the diceroll function again
                    $this->diceRoll();
                }
                break;
        }
    }

    function gamePlay()
    {
        $this->position = 0;
        while ($this->position != 100) {                                    //UC4 while condition for repeating the play till winning position is reached
            $this->diceCount++;                                             // UC6 dice role count
            echo "Dice count :" . $this->diceCount . "\n";
            //looping the game with 2 players                               // UC7
            for ($i = 1; $i <= 2; $i++) {
                if ($i == 1) {
                    $this->player = "player1";
                    echo "$this->player is playing\n";
                    $this->diceRoll();                                      //calling function diceroll
                    echo "<---------------------------------------->\n";
                } elseif ($this->position == 100) {                            //condition to break for loop at player 1
                    break;
                } else {
                    $this->player = "player2";
                    echo "$this->player is playing\n";
                    $this->diceRoll();
                }
            }
            echo "<=================================================================>\n";        // end condition!!! if player reached position 100, he wins the game
            if ($this->position == 100) {
                echo "$this->player has reached position: $this->position.\n$this->player has won the game!!!!!\n-------------------Game Over------------------------\n";
                echo "Thank you for playing the game. Have a nice day!!!";
                echo "\nThe number of times the dice rolled is " . $this->diceCount . ". \n";        // UC6 the total number of times dice rolled
                break;
            }
        }
    }
}
$play = new SnakeAndLadder();
$play->welcomeMsg();
$play->gamePlay();

?>