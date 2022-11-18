<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">
    <title>My test page</title>
  </head>
  <body>
<form action="" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text"  name="user_name" placeholder="saissisez ici votre nom...">
    </div>
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email"  name="user_mail" placeholder="saissisez ici votre mail...">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea  name="user_message" placeholder="saissisez ici votre message..."></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>

<?php 

//echo "nombre d'arguments est : " , sizeof($_GET);
$nombre=0;
foreach ($_POST as $cle => $valeur) {
//echo 'La clé ' . $cle . ' contient la valeur ' . $valeur . "\n";
    $nombre++;
}

echo "<p> Nombre d'arguments est : $nombre <p>";
?>

  </body>
</html>