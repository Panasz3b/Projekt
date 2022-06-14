<?php
session_start();
require_once "config.php";
if(empty($_SESSION["licz"] )){
    $_SESSION["licz"] =0;
}
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style\stylSKLEP.css">
    <title>Zamowienie</title>
</head>
<body>
<div id="head">
    <header>
        <h1>Sklep Koszyk</h1>
    </header>
    <aside id="logowanie">
        <?php
        if(!empty($_SESSION["user"])) {
            echo "<p>Zalogowano jako: ".$_SESSION["user"]."</p>";
        }
        ?>
    <p><a href="logowanie.php">Logowanie</a></p><a href="sklep.php">Powrot</a></aside>
    
 
    <?php 

?>
</div>
<div id="main">
        <h1>PRODUKT ZOSTAŁ ZAMÓWIONY</h1>

    </div>
    <footer>
  <p>Made by Dominik</p>
</footer>
</body>
</html>