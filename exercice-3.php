<?declare(strict_types=1);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exo 3</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    
</head>
<body>

<?php


 class Warrior {


    public function __construct(
        private string $name,
        private int $life,
        private string $weapon,
        ) {}
    
    public function displayWarrior() {
        echo "<p>Nom: " . $this->name . " - Vie : " . $this->life;
        echo "<br>";
    }

}

class Weapon {

    public function __construct(
        private string $name,
        private int $damage,
        ) {}
    
    public function displayWeapon() {
        echo "<p>Nom: " . $this->name . " - Dégâts : " . $this->damage;
        echo "<br>";
    }

}



$warrior1 = new Warrior("John", 100);
$warrior2 = new Warrior("George", 80);
$warrior3 = new Warrior("Ringo", 100);
$warrior1->displayWarrior();
$warrior2->displayWarrior();
$warrior3->displayWarrior();
























?>


</body>
</html>