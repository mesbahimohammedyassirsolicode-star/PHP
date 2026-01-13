<?php
// create simple table
$animaux =["chat","chein","lapin"];
echo "premier animal" .$animaux[0] . "<br>";
// for each 
foreach($animaux as $animal){
    echo "animal: $animal <br>";
}
// Create an association table
$voiture =[
    "marque" => "Toyota",
    "modele" => "corolla",
    "année" => 2020
];
echo "Modèle : " . $voiture["modele"] . "<br>";
// adding and removing
$fruits =["Pomme","Banane"];
array_push($fruits, "mangue"); // add 
unset($fruits[1]);// remove
// count the itmes
echo "number de fruits :". count($fruits);