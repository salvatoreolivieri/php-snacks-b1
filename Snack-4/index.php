<?php

//Consegna:
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

function getUniqueRandom($min, $max, $nItems){

  // creo un array vuoto
  $newArray = [];

  // verifico che min sia inferiore a max e nel caso lo correggo
  if($max < $min){
    $tmp = $max;
    $max = $min;
    $min = $tmp;
  }

  // verifico che non ci siano più items di quelli che si possono estrarre
  if($nItems > ($max - $min)){
    $nItems = $max - $min + 1;
  }

  // creo il ciclo per la creazione dei numeri random
  // finché non ho raggiunto il numero di items li escraggo e li pusho nell'array da restituire
  // con count() ottendo la lunghezza dell'array
  while(count($newArray) < $nItems ){
    // genero un numero random
    $number = rand($min, $max);
    // verifico che non sia presente. In questo caso lo pusho nell'array
    if(!in_array($number, $newArray)){
      // in JS sarebbe newArray.push(number)
      $newArray[] = $number;
    }
  }

  // restituisco l'array creato
  return $newArray;

}

$randArr = getUniqueRandom(1, 100, 15);

var_dump($randArr);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  
</body>
</html>