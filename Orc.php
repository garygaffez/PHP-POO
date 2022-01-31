<?php

require_once('Character.php');

class Orc extends Character {

    private $damage;

    public function __construct($health = 500, $rage = 0) {
        parent::__construct($health, $rage);
        $this->attack();
    }

    public function setDamage($damage) {
        $this->damage = $damage;
    }

    public function getDamage() {
        return $this->damage;
    }

    public function attack() {
        $random = rand(600, 1000);
        $this->setDamage($random);
        return $random;
    }

    public function attacked($weaponDamage) {
        $this->setHealth($this->getHealth() - $weaponDamage);
    }


}