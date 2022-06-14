<?php
session_start();
error_reporting(0);
require_once "config.php";
$username = $password = "";
$username_err = $password_err = $login_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Wpisz Nazwe.";
    } else{
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Wpisz Haslo.";
    } else{
        $password = trim($_POST["password"]);
    }
    $username_prep = "'".$username."'";
    $password_prep = "'".$password."'";
     $zapytanie  = "SELECT uzytkownicy.nazwa, uzytkownicy.haslo FROM uzytkownicy WHERE uzytkownicy.nazwa like ".$username_prep. " and uzytkownicy.haslo like ". $password_prep;
    // echo $zapytanie."<br>";
   
     $zmienna = mysqli_query($link,  $zapytanie);
     $baza = mysqli_fetch_all($zmienna, MYSQLI_ASSOC);
        if ($username==$baza[0]["nazwa"]&&$password==$baza[0]["haslo"]) {
            $_SESSION["user"] = $username;
        }else {
            echo "Blad logowania";
        }

}
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style\stylSKLEP.css">
    <title>Sklep Login Page</title>
</head>
<body>
<div id="head">
<header>
        <h1>Sklep Logowanie</h1>
    </header>
</div>

<div id="align">
<div id="logowa">
<?php
        if(!empty($_SESSION["user"])) {
            echo "<p>Zalogowano jako: ".$_SESSION["user"]."</p>";
        }
        ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Nazwa<br>
            <input type="text" id="username" name="username">
            <?php 
        if(!empty($username_err)){
            echo '<div class="blad">' .$username_err. '</div>';
        }        
        ?>
            <br>Haslo<br>
            <input type="password" id="password" name="password">
            <?php 
        if(!empty($password_err)){
            echo '<div class="blad">' .$password_err. '</div>';
        }        
        ?>
            <br>
            <input type="submit">
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input type="submit" value="Wyloguj" >
    </form>
    <a href="index.php">Powrot</a>
    </div>
    </div>
    <footer>
  <p>Made by Dominik</p>
</footer>
</body>
</html>