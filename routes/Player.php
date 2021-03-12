<?php

class Player
{
    public $hand;
    public $name;
    public $chips;

    public function __construct($name = 'default', $hand = [], $chips = 1000)
    {
        $this->name = $name;
        $this->hand = $hand;
        $this->chips = $chips;
    }
}
