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
        <label for="name">Nom d'utilisateur :</label>
        <input type="username" name="username" placeholder="saissisez le nom d'utilisateur...">
    </div>
    <div>
        <label for="name">Mot de passe :</label>
        <input type="password" name="password" placeholder="saissisez le mot de passe...">
    </div>

    <div class="button">
        <button type="submit">Envoyer les données</button>
    </div>
</form>

<?php 

if (isset($_POST['username']) && isset($_POST['password'])){
    if ($_POST['username'] == "John" && $_POST['password'] == "Rambo"){
      echo  "C'est pas ma guerre";
               
    } else {
      echo  "Votre pire cauchemar";
    }
}
    ?>

  </body>
</html>