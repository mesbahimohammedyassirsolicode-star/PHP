<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul</title>
</head>
<body>
    <form method="post">
  <label for="nb1">number1</label>
    <input type="text" name="number1" id="nb1">
    <label for="nb2">number2</label>
    <input type="text" name="number2" id="nb2">
    <select name="operator" id="">
        <option value="plus">+</option>
    </select>
    <button class="send">submit</button>
    </form>
  <?php 
  $errour=[];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nb1=$_POST["number1"];
  $nb2=$_POST["number2"];
  if(is_numeric($nb1) && is_numeric($nb2))
    {
    $result = $nb1 + $nb2 ;
        echo $result ;
     
    }
    else{
         if (!is_numeric($nb1)){
        
      array_push($errour,'input 1 is not a number !');


      }
      if (!is_numeric($nb2)){
      array_push($errour,'input 2 is not a number !');
      }
    foreach($errour as $err)
        echo $err ;
    }

 

}
 
  ?>
    
</body>
</html>