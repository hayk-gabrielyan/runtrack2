<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
    <title>My test page</title>
  </head>
  <body>


<form action="" method="get">

    <div>
        <label for="name">Nombre :</label>
        <input type="text" name="number" placeholder="saissisez un nombre ici...">
    </div>
    <div class="button">
        <button type="submit">Valider</button>
    </div>

</form>

<?php 

if (isset($_GET ['number'])){
  if ($_GET ['number'] %2 == 0){
    echo "Nombre ", $_GET ['number'] ," est pair <br>";
  }
  else{
    echo "Nombre ", $_GET ['number'] , " est impair <br>";
  }
  }
?>

  </body>
</html>