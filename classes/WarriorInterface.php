<?php
declare(strict_types=1);
//create WarriorInterface
interface WarriorInterface {
    public function displayWarrior(): void;

    public function attack($warrior):void;
}

?>