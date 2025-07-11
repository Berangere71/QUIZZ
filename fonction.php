<?php

// function functionName(type param1, type param2, ...) : returnType{
//     // Code
//     return value;
// }

// function Somme(float $a,float $b) : float{
//     return $a+$b;
// }

// echo Somme(2,3) + Somme(4,5); // Affiche 14
// // equivalent à echo 2+3 + 4+5;

/***
 * Convertit un tableau en string
 * @param array $table : le tableau à convertir en string
 * @param string $separator : séparateur utilisé entre chaque élément du tableau, par défaut ","
 * @return string : la string qui contient tous les éléments du tableau.
 */
// function arrayToString(array $table,string $separator = ",") : string{
//     $joinedString = "";

//     foreach($table as $key=>$value){
//         $joinedString = $key==0 ? $joinedString.$value :$joinedString.$separator.$value;
//     }

//     return $joinedString;
// }

// echo arrayToString( ["J'ai",24,"ans"] ," ");      // => J'ai 24 ans

// $result = addition(10, 10); 
// echo $result;
// function addition($a, $b) {
//     return $a + $b ;
// }


// $result = estpair(2); // Vérifie si 2 est pair

// echo $result;

// function estpair($a) {
//     if ($a % 2 == 0) { // Vérifie si le reste de la division par 2 est égal à 0
//         echo "c'est pair"; 
//         return true; // Si c'est pair, retourne true
//     } else {
//         return false; // Sinon, retourne false
//         echo "c'est impair";
//     }
// }

// function tableDeMultiplication($number) {
//     for ($i = 1; $i <= 10; $i++) {
//         $result = $number * $i; 
//         echo "$number x $i = $result\n"; // Utilisation de la variable $result
//     }
// }

// echo "Donner un chiffre : \n";
// $i = trim(fgets(STDIN)); // Lecture de l'entrée utilisateur
// echo "La table de multiplication de $i est :\n";
// tabledemultiplication($i); // Appel de la fonction pour afficher la table

// function calculerlamoyenne ($notes) {

//     $moyenne = array_sum ($notes) / count ($notes);
//     return $moyenne;
// }
// $notes=array (10,15,6,3,8);
// $moyenne = calculerlamoyenne ($notes);
// echo "la moyenne des notes est : $moyenne \n";


// function celsiusenfahrenheit($degré)
// {
//     $fahrenheit = $degré * 1.8 + 32;
//     return $fahrenheit;
// }


// echo "donner une température en dégré Celsius : \n";
// $degré= trim (fgets(STDIN));
// $fahrenheit = celsiusenfahrenheit($degré);
// echo "le température en fahrenheit est : $fahrenheit \n";

function compterlesvoyelles($caractères) {
    $compter = 0; // Initialiser le compteur
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y']; // Définir les voyelles

    // Convertir la chaîne en minuscules pour faciliter la comparaison
    $caractères = strtolower($caractères);

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($caractères); $i++) {
        // Vérifier si le caractère est une voyelle
        if (in_array($caractères[$i], $voyelles)) {
            $compter++; // Incrémenter le compteur
        }
    }
    return $compter; // Retourner le nombre de voyelles
}

echo "Écrire une phrase : \n";
$caractères = trim(fgets(STDIN));
echo 'Le nombre de voyelles est : ' . compterlesvoyelles($caractères) . "\n";


