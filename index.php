<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad-words</title>
</head>
<body>
  <?php
    $lorem = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, sunt possimus nulla tenetur repudiandae iusto? Deserunt corporis ad expedita beatae itaque mollitia illum necessitatibus fugiat, a delectus. Unde, aliquid omnis.';
    $lorem_length = strlen($lorem);
  ?>
  <!-- stampare il paragrafo lorem -->
  <h1>Lorem</h1>
  <p>
    <?php
      echo $lorem;
    ?>
  </p>
  
</body>
</html>