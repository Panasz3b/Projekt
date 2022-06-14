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
    <link rel="stylesheet" href="style\styl1.css">
    <link rel="stylesheet" href="style\stylSKLEP.css">
    <title>Sklep Landing Page</title>
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
    <p><a href="logowanie.php">Logowanie</a></p></aside>
    <form action="koszyk.php" method="post">
        <input type="hidden" name="reset" value="reset">
        <input type="submit" value="Restuj Koszyk" >
    </div>
    <a href="sklep.php">Powrot</a>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $_POST["zamn"];
        /*
       $_SESSION["zamowienie".$_SESSION["licz"]] = $_POST["zamowienie"];
       $_SESSION["licz"]++;
       for ($i=0; $i < $_SESSION["licz"]; $i++) { 
           echo $_SESSION[]."<br>";
           $zapytanie  = "SELECT * FROM produkty where IdProdukt=".$_SESSION["zamowienie".$i] ;
         $zmienna = mysqli_query($link,  $zapytanie);
         if($zmienna==true){
            $baza = mysqli_fetch_all($zmienna, MYSQLI_ASSOC);
         }
         
         $wart = $baza ;
      
       // $obraz = "'"."img"."/".$wart[0]["obrz"]."'";
        echo '<p class="prod">'. $wart[0]["nazwa"]."</p>";
       }
          */
       /*if($_POST["reset"]=="reset"){
        for ($i=0; $i < $_SESSION["licz"]; $i++){
           unset($_SESSION["zamowienie".$i ]);
        }$_SESSION["licz"]=0;
        $html = preg_replace('#<p class="prod">(.*?)</h1>#', '', $html);
       }*/
    }
      unset($_POST["zamowienie"] );
    ?>
    
    <footer>
  <p>Made by Dominik</p>
</footer>
</body>
</html>