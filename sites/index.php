<?php
session_start();
if (empty($_SESSION["user"])) {
    $_SESSION["user"]="GOSC";
}
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
        <h1>Sklep Strona Glowna</h1>
    </header>
    <aside id="logowanie">
        <?php
        if(!empty($_SESSION["user"])) {
            echo "<p>Zalogowano jako: ".$_SESSION["user"]."</p>";
        }
        ?>
    <p><a href="logowanie.php">Logowanie</a></p></aside>
    </div>
    <div id="Panele">
    <article>Sklep
        <br>
        <a href="sklep.php">Otworz Sklep</a>
    </article>
    <article>Wyszukaj
        <form action="szukaj.php" method="post">
            <input type="text" id="wysz" name="wysz">
            <input type="submit">
          </form>
    </article>
    </div>
    <footer>
  <p>Made by Dominik</p>
</footer>
</body>
</html>