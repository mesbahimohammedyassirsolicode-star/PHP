<?php
// Create the if/else condition
$age = 17;
if ($age>=18){
    echo "Vous êtes majeur.";
}else{
    echo "Vous êtes mineur.";
}
// Add an else if condition
$note =14;
if ($note>=16){
    echo "trés bien";

}elseif($note>=10){
    echo "passable";
}else{
    echo "echec";
}
// use switch
$jour= "vendredi";
switch ($jour){
    case "lundi":
        echo "debut de semain";
        break;
        case "vendredi":
            echo "Dernier jour avant le week-end";
            break;
            default:
            echo "jour normal";
}
?>
