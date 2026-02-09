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
         background-image: url("https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&w=1200");

    }
    /* GRID CONTAINER */
    .databook {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
      padding: 2rem;
      justify-items: center;
    }

    /* CARD */
    .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
   background-color: rgba(255, 255, 255, 0.8);
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

    .card img{
      width: 100%;
      height: 220px;
      object-fit: contain;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .dispo {
      font-weight: bold;
      padding: 6px 10px;
      display: inline-block;
      margin-top: 5px;
    }

    .ok { color: green; }
    .no { color: red; }

    .total {
      grid-column: 1 / -1;
      font-size: 18px;
      font-weight: bold;
      background: #fff;
      padding: 12px 20px;
      border: 1px solid #000;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
      width: fit-content;
      margin: auto;
    }
/* ===== Search Form Style ===== */
.search-form{
  width: 100%;
  display: flex;
  justify-content: center;
  margin: 20px 0;
}

.search-form form{
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 12px 16px;
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.12);
  border: 1px solid #ddd;
}

.search-form input{
  width: 320px;
  padding: 10px 14px;
  border: 1px solid #ccc;
  border-radius: 10px;
  outline: none;
  font-size: 15px;
  transition: 0.2s;
}

.search-form input:focus{
  border-color: #000;
  box-shadow: 0 0 0 3px rgba(0,0,0,0.12);
}

.search-form button{
  padding: 10px 16px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  font-weight: bold;
  font-size: 14px;
  background: #000;
  color: #fff;
  transition: 0.2s;
}

.search-form button:hover{
  transform: translateY(-1px);
  opacity: 0.9;
}

/* reset link as button */
.search-form a{
  padding: 10px 16px;
  border-radius: 10px;
  border: 1px solid #000;
  text-decoration: none;
  font-weight: bold;
  font-size: 14px;
  color: #000;
  transition: 0.2s;
}

.search-form a:hover{
  background: #000;
  color: #fff;
  transform: translateY(-1px);
}
  </style>
</head>
<body>
<div class="search-form">
  <form method="get">
    <input type="text" name="search" placeholder="Search by title">
    <button type="submit">Search</button>
    <a href="biblo.php">Reset</a>
  </form>
</div>
  <?php
$livres = [
  [
    "code" => 1,
    "titre" => "A Song of Ice and Fire",
    "auteur" => "George R. R. Martin",
    "annee" => 1996,
    "prix" => 100,
    "disponible" => true,
    "image" => "images/ice-song-and-fire.jpg"
  ],
  [
    "code" => 2,
    "titre" => "The Prince",
    "auteur" => "Niccolo Machiavelli",
    "annee" => 1532,
    "prix" => 99,
    "disponible" => true,
    "image" => "images/the-prince.jpg"
  ],
  [
    "code" => 3,
    "titre" => "Beyond Good and Evil",
    "auteur" => "Friedrich Nietzsche",
    "annee" => 1886,
    "prix" => 440,
    "disponible" => false,
    "image" => "images/beyond-good-and-evil.jpg"
  ],
  [
    "code" => 4,
    "titre" => "The Hobbit",
    "auteur" => "J.R.R. Tolkien",
    "annee" => 1937,
    "prix" => 1500,
    "disponible" => true,
    "image" => "images/the-hobbit.jpg"
  ],
  [
    "code" => 5,
    "titre" => "The Lord of the Rings",
    "auteur" => "J.R.R. Tolkien",
    "annee" => 1954,
    "prix" => 150,
    "disponible" => false,
    "image" => "images/the-lord-of-the-rings.jpg"
  ],
  [
    "code" => 6,
    "titre" => "Thus Spoke Zarathustra",
    "auteur" => "Friedrich Nietzsche",
    "annee" => 1883,
    "prix" => 150,
    "disponible" => true,
    "image" => "images/thus-spoke-zarathustra.jpg"
  ],
  [
    "code" => 7,
    "titre" => "Animal Farm",
    "auteur" => "George Orwell",
    "annee" => 1945,
    "prix" => 200,
    "disponible" => true,
    "image" => "images/animal-farm.jpg"
  ],
  [
    "code" => 8,
    "titre" => "The Interpretation of Dreams",
    "auteur" => "Sigmund Freud",
    "annee" => 1899,
    "prix" => 250,
    "disponible" => false,
    "image" => "images/the-interpretation-of-dreams-50_900x.webp"
  ],
  [
    "code" => 9,
    "titre" => "The Muqaddimah",
    "auteur" => "Ibn Khaldun",
    "annee" => 1377,
    "prix" => 300,
    "disponible" => true,
    "image" => "images/the-muqaddimah.jpg"
  ]
];
$total = 0;
echo "<div class='databook'>";
// variable for search 
$search = "";
if (isset($_GET['search'])) {
    // strtolower make the input value lowercase
    $search = strtolower($_GET['search']);
}
$total = 0;
foreach ($livres as $livre) {
        // first check if it not empty
        if ($search != "") {
        // 
        if (str_contains(strtolower($livre['titre']), $search) === false ) {
            // false here make index 0 works
            continue;
        }
    }
  echo "<div class='card'>";
  echo "<img class='book-img' src='{$livre['image']}' alt='{$livre['titre']}'>";
  echo "<p><b>Code :</b> {$livre['code']}</p>";
  echo "<p><b>Titre de livre :</b> {$livre['titre']}</p>";
  echo "<p><b>Auteur de livre :</b> {$livre['auteur']}</p>";
  echo "<p><b>Annee :</b> {$livre['annee']}</p>";
  echo "<p><b>Prix de livre :</b> {$livre['prix']} DH</p>";
  //total price
  if ($livre['disponible']) {
    echo "<p class='dispo ok'>Disponible</p>";
    $total += $livre['prix'];
  } else {
    echo "<p class='dispo no'>Non Disponible</p>";
  }
  echo "</div>";
}
echo "<div class='total'>Total des livres disponibles : $total DH</div>";
echo "</div>";
?>
</body>
</html>
