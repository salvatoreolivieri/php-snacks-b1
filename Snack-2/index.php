<?php

$valid = true;

$name =  $_GET['name'];
$mail =  $_GET['mail'];
$age =  $_GET['age'];

$error = "";

var_dump($_GET);

if (strlen($name) < 3) {
  $valid = false;
  $error = "Il tuo nome è inferiore a 3 caratteri.";

} elseif (!strpos($mail, '@') || !strpos($mail, '.')) {
  $valid = false;
  $error = "La tua email non contiene il punto o la chiocciola.";

} elseif (!is_numeric($age)){
  $valid = false;
  $error = "L'età non corrisponde a un numero";

}

if ($valid) {
  $permission = "Sei autorizzato";
  $error = "You rock! Everything oks!";

} else{
  $permission = "Non sei autorizzato";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>

<strong>Name: </strong><?php echo $name ?><br>
<strong>Mail: </strong><?php echo $mail ?><br>
<strong>Age: </strong><?php echo $age ?><br>

<strong>Output: </strong><?php echo $permission ?><br>
<strong>Error: </strong><?php echo $error ?><br>

</body>
</html>