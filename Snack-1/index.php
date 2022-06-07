<?php

//Consegna:
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

$basketTeam = array (

  array(
    "squadraCasa"=> "Olimpia Milano",
    "squadraOspite"=> "Cantù",
    "puntiCasa"=> 55,
    "puntiOspiti" => 60
  ),

  array(
    "squadraCasa"=> "wrf34t5g",
    "squadraOspite"=> "xnfe",
    "puntiCasa"=> 50,
    "puntiOspiti" => 95
  ),

  array(
    "squadraCasa"=> "Ockpdn3",
    "squadraOspite"=> "ceio03",
    "puntiCasa"=> 23,
    "puntiOspiti" => 12
  ),

  array(
    "squadraCasa"=> "Olimpia Milano",
    "squadraOspite"=> "Cantù",
    "puntiCasa"=> 9,
    "puntiOspiti" => 38
  ),

  array(
    "squadraCasa"=> "Olimpia Milano",
    "squadraOspite"=> "Cantù",
    "puntiCasa"=> 55,
    "puntiOspiti" => 60
  ),

);

var_dump($basketTeam);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>

<?php 

  for ($i=0; $i < 5; $i++) { 

    echo $basketTeam[ $i ][ "squadraCasa" ] . " - " .
    $basketTeam[ $i ][ "squadraOspite" ] . " | " .
    $basketTeam[ $i ][ "puntiCasa" ] . " - " .
    $basketTeam[ $i ][ "puntiOspiti" ] . "<br><br>";
  
  }

?>
  
</body>
</html>