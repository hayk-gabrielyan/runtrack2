<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">

    <link rel="stylesheet" href="

    <?php 
    if($_POST == NULL){
        echo "style1.css";
        } 
        else{
        echo $_POST['style'];
        } 
        ?>
        " > 
        
  </head>
  <body>
  <form method="POST" class="container">
    <h1>Choix du style de la page:</h1>
        <select class="form-separate" name="style" id="style" >
            <option value="style1.css">Style 1</option>
            <option value="style2.css">Style 2</option>
            <option value="style3.css">Style 3</option>
        </select>
        <input class="btn" type="submit" value="Envoyer">
    </form>
  </body>
</html>