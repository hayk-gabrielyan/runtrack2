<?php session_start();

if(isset($_GET['reset'])) {
    setcookie('nbvisites', 1);
    header("Location: index.php");
    exit();
}

if (isset($_COOKIE['nbvisites'])) {
    $count = $_COOKIE['nbvisites']+1;
    setcookie('nbvisites',$count);
    echo $_COOKIE['nbvisites'];
}

?>

<form method="GET" >
    <input name="reset" type="submit" value="reset">
</form>