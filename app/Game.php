<?php

require "Deck.php";
require 'Player.php';

class Game
{
    public $players;
    public $deck;

    public function __construct($numOfPlayers = 2)
    {
        $players = [];

        for ($i = 0; $i < $numOfPlayers; $i++)
        {
            $player = new Player();
            array_push($players, $player);
        }
        $this->players = $players;
        $this->deck = new Deck();
    }

    public function startGame($numberToDeal = 2)
    {
        foreach ($this->players as $player)
        {
            $newHand = [];

            for ($i = 0; $i < $numberToDeal; $i++)
            {
                $newCard = $this->deck->deal();
                array_push($newHand, $newCard);
            }
            $player->hand = $newHand;
        }
    }
}
