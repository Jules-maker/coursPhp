<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
</head>

<body>
<a href="index.php" style="font-size: 5em;">Accueil</a>

    <?php
//exo 1
    $a = "a";
    $_b = "b";
    $c_a = "c";
    $ABA = "d";
    $d1 = "e";
    $f2 = "f";
//exo 2
    $notePhp = 16;
    $noteJs = 12;
    $notePython = 8;
    $moyenne = ($notePhp + $noteJs + $notePython) / 3;
    
    echo "La moyenne est de" . $moyenne . "/20.";
    echo "<br/>";
//exo 3

$prixHT = 40;
$tva = 20;
$prixTTC = $prixHT * (1 + $tva / 100);

echo "Le prix TTC du produit est de " . $prixTTC . "€.";
echo "<br/>";
//exo 4
$genre = "homme";
    if ($genre === "homme") {
        echo "C'est un développeur !";
    } else {
        echo "C'est une développeuse !";
    }
    echo "<br/>";
//exo 5
// variable $budget 1 345,58
$budget = 1345.58;
$achat = 1266.00;
//echo if $budget>=$achat
if ($budget >= $achat) {
echo "L'achat est possible";
} else {
echo "L'achat n'est pas possible";
}
echo "<br/>";
//exo 6
$age = 22;
if ($age >= 18) {
    echo "<p>Je suis majeur car j'ai ".$age."ans</p>";
} else {
    echo "<p>Je suis mineur</p>";
}
echo "<br/>";
//exo 7
$currentHour = 12;

if ($currentHour >= 5 && $currentHour <= 9) {
    echo "Bonjour !";
} elseif ($currentHour >= 10 && $currentHour <= 17) {
    echo "Bonne journée !";
} elseif ($currentHour >= 18 && $currentHour <= 22) {
    echo "Bonne soirée !";
} else {
    echo "Bonne nuit !";
}
echo "<br/>";
//exo 8
$departement = 76000;
echo   "  <style>.departement {
    max-width: 5em;
    max-height: 6em;
    overflow: auto;
}</style>";
echo "<div class='departement'>";
while ($departement <= 76999) {
    echo $departement . "<br/>";
    $departement++;
}
echo "</div>";
echo "<br/>";
    ?>
</body>

</html>