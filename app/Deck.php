<?php
class Deck
{
    public $deck;
    public $dealtCards;

    public function __construct($deck = '52')
    {
        $deckArray = [];
        $suits = ['c', 'h', 's', 'd'];
        $cards = ['2', '3', '4', '5', '6', '7', '8', '9', 'T', 'J', 'Q', 'K', 'A'];

        foreach ($suits as $suit)
        {
            foreach ($cards as $card)
            {
                array_push($deckArray, $card . $suit);
            }
        }

        $this->deck = $deckArray;
        $this->dealtCards = [];
        // echo print_r($this->deck);
    }

    public function deal()
    {
        if (count($this->deck) > 0)
        {
            $card = array_shift($this->deck);
            array_push($this->dealtCards, $card);
            return $card;
        }
    }

    public function shuffleDeck()
    {
        shuffle($this->deck);
        // echo count($this->deck);
        // echo print_r($this->deck);
    }
};
