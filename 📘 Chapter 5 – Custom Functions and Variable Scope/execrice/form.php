<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> Form</title>
</head>
<body>

<h1>Form (Name - Age - Gender)</h>

<form method="POST" action="">
  <label>Name:</label><br>
  <input type="text" name="name"><br><br>

  <label>Age:</label><br>
  <input type="number" name="age"><br><br>

  <label>Gender:</label><br>
  <input type="radio" name="gender" value="Male"> Male <br>
  <input type="radio" name="gender" value="Female"> Female <br><br>

  <button type="submit" name="submit">Send</button>
</form>

<hr>
<?php 
if (isset($_POST["submit"])){
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
if ($gender === "Male"){
  echo "Mr $name <br> Age:$age " ;
}
else {
  echo "Ms $name <br> age: $age";
}
}
 ?>


</body>
</html>
