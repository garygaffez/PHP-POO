<?php

require_once('Character.php');

class Hero extends Character {
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;
    private $damage;

    public function __construct($health, $rage, $weapon, $weaponDamage, $shield, $shieldValue) {
        parent::__construct($health, $rage);
        $this->setWeapon($weapon);
        $this->setWeaponDamage($weaponDamage);
        $this->setShield($shield);
        $this->setShieldValue($shieldValue);        
    }

    public function setDamage($damage) {
        $this->damage = $damage;
    }

    public function getDamage() {
        return $this->damage;
    }

    public function setWeapon($weapon) {
        $this->weapon = $weapon;
    }
    public function setWeaponDamage($weaponDamage) {
        $this->weaponDamage = $weaponDamage;
    }
    public function setShield($shield) {
        $this->shield = $shield;
    }
    public function setShieldValue($shieldValue) {
        $this->shieldValue = $shieldValue;
    }

    public function getWeapon() {
        return $this->weapon;
    }
    public function getWeaponDamage() {
        return $this->weaponDamage;
    }
    public function getShield() {
        return $this->shield;
    }
    public function getShieldValue() {
        return $this->shieldValue;
    }

    // pour du debogage plutot __toString
    // public function __toString() {
    //     return settype($this->getHealth(), 'string');
    // }

    public function attacked($valueDamage) {
        if ($this->getShieldValue() < $valueDamage) {
            $realDamage = ($valueDamage - $this->getShieldValue());
            $this->setHealth($this->getHealth() - $realDamage);
        }
        $this->gainRage();
    }

    private function gainRage() {
        $rageUp = $this->getRage() + 30;
        $this->setRage($rageUp);
    }

}
