<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exos 2</title>
</head>
<body>
<a href="index.php" style="font-size: 5em;">Accueil</a>
<br>
<?php 
//exo 1
function helloWorld() {
    echo "Hello World";
}

helloWorld();
echo "<br>";
//exo 2
$text = "Retourne moi ce texte ptn";
function getMyText($string) {
    return $string;
}
echo getMyText($text);
echo "<br>";


//exo 3
function concatenation($string1, $string2) {
    return $string1 . $string2;
}
    
echo concatenation("Jules","Giraud");
echo "<br>";
//exo 4

function concatenationSpaced($string1, $string2) {
    return $string1 ." ".$string2;
}
    
echo concatenationSpaced("Jules","Giraud");
echo "<br>";
//exo 5
function estMajeur($age) {
    if ($age >= 18) {
        return "Vous êtes majeur";
    } else {
        return "Vous êtes mineur";
    }
}
echo estMajeur(20);
echo "<br>";
//exo 6

function greaterNumber($number1, $number2) {
    if ($number1 > $number2) {
        return "Le plus grand est ".$number1;
    } else {
        return "Le plus grand est ".$number2;
    }
}
echo greaterNumber(10, 20);
echo "<br>";    
//exo 7

function firstTabElement($tab) {
    return $tab[0];
}

















?>
</body>
</html>