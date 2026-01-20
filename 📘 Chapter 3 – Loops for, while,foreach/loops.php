<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f0f0f0;
        display: grid;
        justify-items: center;
        grid-template-columns: auto auto auto;
        row-gap: 15px;
        column-gap: 15px;


    }
    .shelf {
        border: 1px solid #000;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px;
        margin: 10px 0;
        width: 300px;
        background-color: #f9f9f9;
    }
  </style>
</head>
<body>

<?php
  $livres = [

    [

        "titre" => "Apprendre PHP",

        "auteur" => "Fatine Chebab",

        "annee" => 2024,

        "prix" => 120,

        "disponible" => true

    ],

    [

        "titre" => "JavaScript pour débutants",

        "auteur" => "Ali Ahmed",

        "annee" => 2023,

        "prix" => 100,

        "disponible" => false

    ],

    [

        "titre" => "HTML & CSS",

        "auteur" => "Sara Benali",

        "annee" => 2022,

        "prix" => 80,

        "disponible" => true

    ]


];
$total = 0;
foreach ($livres as $livre) {
    $shelf = "<div class='shelf'>";
    $shelf .= "<p>Titre de livre : {$livre['titre']}</p>";
    $shelf .= "<p>Auteur de livre : {$livre['auteur']}</p>";
    $shelf .= "<p>Annee : {$livre['annee']}</p>";
    $shelf .= "<p>Prix de livre : {$livre['prix']}</p>";
    $shelf .=  $livre['disponible'] ? "Disponible" : "Non Disponible";
    $shelf .= "</div>";
    echo $shelf;
    if ($livre['disponible']) {
        $total += $livre['prix'];
    }
}
echo "<p>Total des livres disponibles : $total</p>";

?>
  
</body>
</html>