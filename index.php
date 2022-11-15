<?php declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- make a link to exercie-1.php -->
    <a href="exercice-1.php" style="font-size: 5em;">Exercice 1</a>
    <a href="exercice-2.php" style="font-size: 5em;">Exercice 2</a>
    
    
       
    <h1>Test</h1>

    <?php
     echo "Hello World" ;
    
    
    $name = "John";
    $age = 20;
    $isActive = true;
    $isEnable = true;
    $number = 15;
    echo "<p> Je m'appelle " . $name . " et j'ai " . $age . " ans</p>";
    if ($age >= 18) {
        echo "<p>Je suis majeur</p>";
    } else {
        echo "<p>Je suis mineur</p>";
    }
    if ($isActive) {
        echo "<p>Je suis actif</p>";
    } else {
        echo "<p>Je suis inactif</p>";
    }

    if ($isActive ===false && $isEnable) {
        echo "<p>Je suis actif et autorisé</p>";
    } else {
        echo "<p>Je suis inactif ou non autorisé</p>";
    }
        switch ($name) {
            case 'John':
                echo "<p>Je m'appelle John</p>";
                break;
            case 'George':
                echo "<p>Je m'appelle George</p>";
                break;
            case 'Ringo':
                echo "<p>Je m'appelle Ringo</p>";
                break;
            default:
                echo "<p>Je ne sais pas qui je suis</p>";
                break;
        }
        
        $isAdult = $age >= 18 ? true : false;

        $userAge = 12;
        $userName =   "jules";
        $userEmail = "jules@gmail.com"; 

        $user1 = [
            "name" => "jules",
            "age" => 12,
            "email" => "jules@gmail.com"
        ];
    
        $user2 = [
            "name" => "jules",
            "age" => 12,
            "email" => "user2àgmail.com"
        ];
        $user3 = [
            "name" => "julie",
            "age" => 100,
            "email" => "julie@outlook.fr"
        ];
        echo $user1["name"];

        while ($number <= 20) {
            echo "<p> $number </p>";
            $number++;
        }

        for ($i=0; $i < 10; $i++) { 
            echo "<p>Je suis dans la boucle</p>";
        }
//si la key n'est pas def alors on aurait 0:value 1:value 2:value
        foreach ($user3 as $key => $value) {
            echo "<p> $key : $value </p>";
        }

        //var dump permet d'afficher un tableau 
        var_dump($user1);

        //die() permet d'arrêter le script


        //objets

//         class User {
            
//             public function __construct(public string $name,public int $age,public string $email) {
                
//             }

//             public function sayHello()  {
//                 echo "<p> Hello my name is $this->name </p>";
//             }
//             public function displayUser() {
//                 echo "<p>" . $this->name . " " . $this->age . " ".$this->email ."</p>";
//             }
//         }
// new User("jules",12,"j.g@g.com");

//         // class Customer {
//         //     /**
//         //      * Firstname
//         //      * Lastname
//         //      * Email
//         //      * Balance
//         //      * Products
//         //      */

            
//         // }

// //make a class Customer with a constructor taking Firstname, Lastname, Email, Balance, Products
// //make a method displayCustomer() that displays the customer's information
//     class Customer {
//         public function __construct(public string $firstname,public string $lastname,public string $email,public float $balance,public array $products) {
            
//         }
//         public function displayCustomer() {
//             echo "<p>" . $this->firstname . " " . $this->lastname . " ".$this->email . " " . $this->balance . " " . $this->products ."</p>";
//         }
//         public function addProduct($product) {
//             array_push($this->products, $product);
//         }
//     }
require_once "classes/User.php";
require_once "classes/Customer.php";
require_once "classes/Administrator.php";
require_once "classes/Book.php";
require_once "classes/BookInterface.php";

$customer = new Customer("jules","Giraud","j.g@g.com",100,["book1","book2"]);
$admin = new Administrator("jules","Giraud","j.g@h.fr");






        ?>
</body>
</html>