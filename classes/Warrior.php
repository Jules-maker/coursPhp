<?php
declare(strict_types=1);
// Peut-être utile plus tard
abstract class Warrior {

    //constructor with what is below this line
    public function __construct(
        private string $name,
        private int $life,
        ) {}
    
    public function displayWarrior() {
        echo "<p>Nom: " . $this->name . " - Vie : " . $this->life;
    }

}











?>