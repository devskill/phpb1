<?php
class Player
{
    public $name;
    public $pieces;

    public function giveTurn($dice)
    {
        $rollValue = $dice->roll();

        $playersSelectionOfPicece = 1;

        $this->pieces[$playersSelectionOfPicece]->move($rollValue);
    }
}

class Dice
{
    public function roll()
    {
        return 5;
    }
}

class GameBoard
{
    public $dice;
    public $players;
    private $currentPlayer;

    public function __construct()
    {
        $this->currentPlayer = 0;
    }

    public function rotateTurn()
    {
        $players[$currentPlayer]->giveTurn($this->dice);
        $currentPlayer = ($currentPlayer + 1) % 4;
    }
}

class Piece
{
    public $position;
    public $maxSteps = 50;
    public $status;

    public function __construct()
    {
        $this->position = 0;
        $this->status = "in home";
    }

    public function move($step)
    {
        if($this->position + $step <= $this->maxSteps)
        {
            $this->position += $step;
            if($this->position == $this->maxSteps)
                $this->status = "complete";
            else
                $this->status = "in progess";
        }
    }
}