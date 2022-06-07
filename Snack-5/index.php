<?php

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita accusantium libero quasi! Consequatur nisi quaerat accusantium cupiditate consequuntur suscipit obcaecati, exercitationem optio vero velit ab nulla natus quod similique? Ullam consequatur voluptates repellendus ipsum error veniam soluta asperiores magni. Cumque placeat magnam vero doloremque quam, expedita exercitationem quas. Quia, alias. Sint impedit eveniet reiciendis cupiditate maxime in aliquam? Unde nam impedit nostrum doloremque. Labore inventore dolor aspernatur repellendus nisi. Odit earum corrupti ex ut. Dolor cupiditate saepe nulla. Quibusdam unde deserunt voluptates obcaecati aspernatur illo autem voluptas laboriosam, sapiente veritatis at quod soluta, labore doloribus iure. Debitis asperiores natus consectetur?';

$paragrafo_trimmato = explode(".",$paragrafo);

var_dump($paragrafo_trimmato)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>

<h3>Paragrafo completo</h3>
<p> <?php echo $paragrafo ?> </p>

<hr>

<h3>Paragrafo trimmato</h3>

<?php for ($i=0; $i < count($paragrafo_trimmato) ; $i++) { 
  echo "<p> $paragrafo_trimmato[$i] </p><br>" ;
} ?>

</body>
</html>