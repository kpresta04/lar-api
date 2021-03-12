<?php

require "Deck.php";
require 'Player.php';

class Game
{
    public $players;
    public $deck;
    public $bigBlind;
    public $smallBlind;

    public function __construct($numOfPlayers = 2, $bigBlind = 10, $smallBlind = 5)
    {
        $players = [];

        for ($i = 0; $i < $numOfPlayers; $i++)
        {
            $player = new Player();
            array_push($players, $player);
        }
        $this->players = $players;
        $this->deck = new Deck();
        $this->bigBlind = $bigBlind;
        $this->smallBlind = $smallBlind;
    }

    public function startGame($numberToDeal = 2)
    {
        $this->deck->shuffleDeck();
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
