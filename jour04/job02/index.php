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
        <label for="name">Nom :</label>
        <input type="text" name="Nom" placeholder="saissisez ici votre Nom...">
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" name="Prénom" placeholder="saissisez ici votre Prénom...">
    </div>

    <div class="button">
        <button type="submit">Envoyer les données</button>
    </div>
</form>

<?php

if ($_GET){
echo '<table border=2>
<thead>
  <tr>
    <th>Argument</th>
    <th>Valeur</th>
  </tr>
</thead>';
}

foreach($_GET as $argument => $valeur) {
  echo "<tr>
    <td>$argument</td>
      <td>$valeur</td>
    </tr>";
}

?>

  </body>
</html>