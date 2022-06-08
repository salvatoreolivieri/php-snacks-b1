<?php

/* Consegna:
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/

$posts = [

  '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
      ],
      [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 2'
      ],
  ],

  '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 3'
      ]
  ],

  '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
      ],
      [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
      ]
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>

    body{
      font-family: Arial, Helvetica, sans-serif;
    }

    .card-container{
      display: flex;
    }

    .card{
      display: flex;
      flex-direction: column;
      margin-right: 30px;
      padding: 20px;
      border-radius: 20px;
      cursor: pointer;
      box-shadow: 5px 5px 10px 0;
      transition: 0.3S;
    }

    .card:hover{
      transform: scale(0.9);
    }

    h1,
    h3{
      margin-left: 5px;
    }

    h3{
      color: orange;
    }

    strong{
      line-height: 1.4;
    }
    
    a{
      text-decoration: none;
      color: black;
    }


  </style>


  <title>Snack 3</title>
</head>
<body>

<h1>Posts</h1>

<?php foreach($posts as $key => $value): ?>

  <h3 style="margin-top: 40px;"><?php echo $key ?></h3>

  <div class="card-container">
  <?php foreach($value as $value): ?>
    <a href="">
      <div class="card">
        <div>
          <strong>Title: </strong><?php echo $value["title"] ?><br>
        </div>
  
        <div>
          <strong>Author: </strong><?php echo $value["author"] ?><br>
        </div>
  
        <div>
          <strong>Text: </strong><?php echo $value["text"] ?>
        </div>
      </div>
    </a>
      
      <?php endforeach ?>
    </div>

<?php endforeach ?>
  
</body>
</html>