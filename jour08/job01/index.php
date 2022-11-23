

<?php session_start();

if (isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++ ;

}

if (isset($_GET['button'])){
    $_SESSION['nbvisites'] = 0 ;
    header("location:" . "index.php");
}

echo $_SESSION['nbvisites'];
?>

<form method="GET" >
    <input name="button" type="submit" value="reset">
</form>