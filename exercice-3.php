<?

declare(strict_types=1); ?>
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
    require_once "classes/WeaponType.php";
    require_once "classes/WarriorInterface.php";
    require_once "classes/HealerInterface.php";


//TODO: mettre la classe Abstract Warrior autre part
    abstract class AbstractCharacter
    {
        //constructor with name and life
        public function __construct(
            private string $name,
            private int $life,
        ) {
        }
    }


    class Warrior
    {

        public function __construct(
            private string $name,
            private int $life,
            private WeaponType $weapon,
        ) {
        }

        public function displayWarrior()
        {
            echo "<p>Nom: " . $this->name . " - Vie : " . $this->life;
            echo "<br>";
        }
        public function getWeapon(): WeaponType
        {
            return $this->weapon;
        }
        public function setWeapon($weapon): void
        {
            $this->weapon = $weapon;
        }
        public function attack($warrior): void
        {
            if ($this->weapon === "épée") {
                $warrior->life -= 10;
            } else if ($this->weapon === "arc") {
                $warrior->life -= 15;
            } else if ($this->weapon === "dagues") {
                $warrior->life -= 20;
            }
        }
    }

    class Healer implements HealerInterface
    {
        public function __construct(
            private string $name,
            private int $life,
        ) {
        }
        public function heal($warrior): void
        {
            $warrior->life += 10;
        }
    }







    class Weapon
    {

        public function __construct(
            private string $name,
            private int $damage,
        ) {
        }

        public function displayWeapon()
        {
            echo "<p>Nom: " . $this->name . " - Dégâts : " . $this->damage;
            echo "<br>";
        }
    }



    $warrior1 = new Warrior("John", 100, "épée");
    $warrior2 = new Warrior("George", 80, "arc");
    $warrior3 = new Warrior("Ringo", 100, "dagues");
    $warrior1->displayWarrior();
    $warrior2->displayWarrior();
    $warrior3->displayWarrior();
    //create 3 weapons
    $weapon1 = new Weapon("épée", 10);
    $weapon2 = new Weapon("hache", 20);
    $weapon3 = new Weapon("arc", 5);
    //display the 3 weapons
    $weapon1->displayWeapon();
    $weapon2->displayWeapon();
    $weapon3->displayWeapon();


    $healer1 = new Healer("SilverLoooow", 100);
    $healer2 = new Healer("Silver", 100);
    $healer3 = new Healer("Silver", 100);





















    ?>


</body>

</html>