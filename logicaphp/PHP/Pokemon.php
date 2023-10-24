<?php
class Pokemon {
    private $name;
    private $type1;
    private $type2;
    private $total;
    private $hp;
    private $attack;
    private $defense;
    private $spAtk;
    private $spDef;
    private $speed;
    private $generation;
    private $legendary;
    private $spriteUrl;

    // Constructor
    public function __construct($name, $type1, $type2, $total, $hp, $attack, $defense, $spAtk, $spDef, $speed, $generation, $legendary, $spriteUrl) {
        $this->name = $name;
        $this->type1 = $type1;
        $this->type2 = $type2;
        $this->total = $total;
        $this->hp = $hp;
        $this->attack = $attack;
        $this->defense = $defense;
        $this->spAtk = $spAtk;
        $this->spDef = $spDef;
        $this->speed = $speed;
        $this->generation = $generation;
        $this->legendary = $legendary;
        $this->spriteUrl = $spriteUrl;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getType1() {
        return $this->type1;
    }

    public function getType2() {
        return $this->type2;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getHp() {
        return $this->hp;
    }

    public function getAttack() {
        return $this->attack;
    }

    public function getDefense() {
        return $this->defense;
    }

    public function getSpAtk() {
        return $this->spAtk;
    }

    public function getSpDef() {
        return $this->spDef;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function getGeneration() {
        return $this->generation;
    }

    public function getLegendary() {
        return $this->legendary;
    }

    public function getSpriteUrl() {
        return $this->spriteUrl;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setType1($type1) {
        $this->type1 = $type1;
    }

    public function setType2($type2) {
        $this->type2 = $type2;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setHp($hp) {
        $this->hp = $hp;
    }

    public function setAttack($attack) {
        $this->attack = $attack;
    }

    public function setDefense($defense) {
        $this->defense = $defense;
    }

    public function setSpAtk($spAtk) {
        $this->spAtk = $spAtk;
    }

    public function setSpDef($spDef) {
        $this->spDef = $spDef;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function setGeneration($generation) {
        $this->generation = $generation;
    }

    public function setLegendary($legendary) {
        $this->legendary = $legendary;
    }

    public function setSpriteUrl($spriteUrl) {
        $this->spriteUrl = $spriteUrl;
    }
}
?>