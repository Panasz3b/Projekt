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
    <title>Sklep Landing Page</title>
</head>
<body>
<div id="head">
    <header>
        <h1>Sklep Wyszukiwanie</h1>
    </header>
    <aside id="logowanie">
        <?php
        if(!empty($_SESSION["user"])) {
            echo "<p>Zalogowano jako: ".$_SESSION["user"]."</p>";
        }
        ?>
    <p><a href="logowanie.php">Logowanie</a></p></aside>
    </div>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $zapytanie  = 'SELECT * FROM produkty where nazwa="'.$_POST["wysz"].'"';
       
         $zmienna = mysqli_query($link,  $zapytanie);
         $baza = mysqli_fetch_all($zmienna, MYSQLI_ASSOC);
         $ind = 0;
      //  var_dump($baza);
       // var_dump($baza[0]);
       if (!empty($baza)) {
        $wart = $baza ;
        $obraz = "'"."img"."/".$wart[0]["obrz"]."'";
        echo "<img src=".$obraz."width=200 height=200>"."<p>". $wart[0]["nazwa"]."</p>"
        ."<p>". $wart[0]["opis"]."</p>".'<form action="koszyk.php" method="post">
        <input type="hidden" name="zamowienie" value="'.$wart[0]["IdProdukt"].'">
        <input type="submit" value="Zamow">'."</div>";
       }else {
           echo "Nie odnaleziono ".$_POST["wysz"];
       }
       
    }

    ?>
    <a href="index.php">Powrot</a>
    <footer>
  <p>Made by Dominik</p>
</footer>
</body>
</html>