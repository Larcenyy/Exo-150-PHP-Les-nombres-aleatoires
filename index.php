<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$ordi = rand(0, 50);
echo "<div>$ordi</div>";
/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$ordi2 = rand(50, getrandmax());
echo "<p>$ordi2</p>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.

$ordi3 = rand(0, 50);

if ($ordi3 <= 25){
    echo "<p>vous avez winn</p>";
}
else{
    echo "<p>vous avez perdu</p>";
}

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

function mathRandom($max, $min){
    $rand = rand($max, $min);
    if ($rand > $max - $max){
        return mathRandom($max, $min);
    }
    return $rand;
}

// TODO Votre code ici.







