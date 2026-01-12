<?php
// loop for
for($i = 1; $i <= 10; $i++){
    echo "nombre : $i <br>";
}
//while loop
$j =1;
while ($j <= 5){
    echo "itreation : $j <br>";
    $j++;
}
// foreach loop
$animaux = ["chat","chein","lapin"];
foreach ($animaux as $animal){
    echo"animal : $animal <br>";
}
// break and continue 
for ($i= 1; $i <= 10;$i++){
    if ($i==5) continue;
    if($i == 8)break;
    echo "valeur : $i <br>";
}