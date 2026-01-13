<?php
// simple function
function saluer() {
    echo "Bonjour tout le monde !";
}
saluer();
// Function with argument and return value
function addition($a, $b) {
    return $a + $b;
}
echo "Somme : " . addition(5, 10);
// Default setting
function bienvenue($nom = "visiteur") {
    echo "Bienvenue " . $nom;
}
bienvenue(); 
// Test the scope of the variables
$compteur = 0;

function incrementer() {
    static $compteur = 0;
    $compteur++;
    echo $compteur;
}
incrementer();
incrementer(); 
