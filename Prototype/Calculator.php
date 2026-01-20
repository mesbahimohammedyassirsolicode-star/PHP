<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>

<form action="" method="POST">
  <label>number 1</label>
  <input type="number" name="nb1" id="nb1">

  <select name="op" id="operators">
    <option value="">--choose--</option>
    <option value="plus">+</option>
    <option value="minus">-</option>
    <option value="multi">*</option>
    <option value="div">/</option>
  </select>

  <label>number 2</label>
  <input type="number" name="nb2" id="nb2">

  <button type="submit" name="calcul">calcul</button>
</form>

<?php
$errors = "<ul style='color:red;'>";
// for calcul
function calc($num1, $num2, $operator) {
  if ($operator === "plus") {
    return $num1 + $num2;
  } elseif ($operator === "minus") {
    return $num1 - $num2;
  } elseif ($operator === "multi") {
    return $num1 * $num2;
  } elseif ($operator === "div") {
    if ($num2 == 0) {
      return "You can't divide by 0";
    }
    return $num1 / $num2;
  }
  return "Invalid operator";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //  nb1 error
  if (!isset($_POST["nb1"]) || $_POST["nb1"] === '') {
    $errors .= "<li>number 1 is empty !</li>";
  }

  //  nb2 error
  if (!isset($_POST["nb2"]) || $_POST["nb2"] === '') {
    $errors .= "<li>number 2 is empty !</li>";
  }

  //  operator error
  if (!isset($_POST["op"]) || $_POST["op"] === '') {
    $errors .= "<li>operator is empty !</li>";
  }

  $errors .= "</ul>";

  //  If errors exist
  if ($errors !== "<ul style='color:red;'></ul>") {
    echo $errors;
  } else {
    $num1 =  $_POST["nb1"];
    $num2 =  $_POST["nb2"];
    $operator = $_POST["op"];
    $result = calc($num1, $num2, $operator);
    echo "<h3>Result : $result</h3>";
  }
}
?>

</body>
</html>
