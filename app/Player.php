<?php

class Player
{
    public $hand;
    public $name;

    public function __construct($name = 'default', $hand = [])
    {
        $this->name = $name;
        $this->hand = $hand;
    }
}
