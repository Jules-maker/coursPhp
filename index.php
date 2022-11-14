<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <?php echo "Hello World" ;
    
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

        echo $user1["name"];

        while ($number <= 20) {
            echo "<p> $number </p>";
            $number++;
        }

        for ($i=0; $i < 10; $i++) { 
            echo "<p>Je suis dans la boucle</p>";
        }
        ?>
</body>
</html>