<?php

class Character {
    private $health;
    private $rage;

    public function __construct($health, $rage) {
        $this->setHealth($health);
        $this->setRage($rage);
    }

    public function setHealth($health) {
        $this->health = $health;
    }

    public function setRage($rage) {
        $this->rage = $rage;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getRage() {
        return $this->rage;
    }

}









