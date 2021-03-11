<?php
class Deck
{
    public $unshuffledDeck;
    public $deck;
    public $dealtCards;

    public function __construct()
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
        $this->unshuffledDeck = $deckArray;
        $this->dealtCards = [];
    }

    public function deal($numberToDeal = 1)
    {
        if (count($this->deck) >= $numberToDeal)
        {
            $card = array_shift($this->deck);
            array_push($this->dealtCards, $card);
            return $card;
        }
    }

    public function shuffleDeck()
    {
        shuffle($this->deck);
    }
};
