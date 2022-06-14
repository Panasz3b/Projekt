<?php
session_start();
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\stylSKLEP.css">
    <title>Sklep Main Page</title>
</head>
<body>
<div id="head">
    <header>
        <h1>Sklep</h1>
    </header>
    <aside id="logowanie">
        <?php
        if(!empty($_SESSION["user"])) {
            echo "<p>Zalogowano jako: ".$_SESSION["user"]."</p>";
        }
        ?>
    <p><a href="logowanie.php">Logowanie</a></p>
    <a href="index.php">Powrot</a>
</aside>
    
    </div>
    <div id="towary">
    <?php 
        $zapytanie  = "SELECT * FROM produkty " ;
       
         $zmienna = mysqli_query($link,  $zapytanie);
         $baza = mysqli_fetch_all($zmienna, MYSQLI_ASSOC);
         $ind = 0;
        //var_dump($baza);
       // var_dump($baza[0]);
        $zmn =1;
        foreach($baza as $wart) {
        $obraz = "'"."img"."/".$wart["obrz"]."'";
        echo '<div class="produkt">'."<img src=".$obraz."width=200 height=200>"."<p>". $wart["nazwa"]."</p>"
        ."<p>". $wart["opis"]."</p>".'<form action="zamow.php" method="post">
        <input type="hidden" name="zamn" value="'.$wart["IdProdukt"].'">
        <input type="submit" value="Zamow">'.'</form>'."</div>";
        }
    ?>
    </div>
     
     <footer>
  <p>Made by Dominik</p>
</footer>
</body>
</html>