<?php
// Session starten
session_start();

// Datenbankverbindung aufbauen
$con = new mysqli("localhost", "root", "", "kino");
$sql = "SELECT * FROM login WHERE " .
       "(benutzername LIKE '" . $_REQUEST["name"] . "') AND " .
       "(passwort = '" . md5($_REQUEST["pwd"]) . "')";

$res = $con->query($sql);
$anzahl = $res->num_rows;

if ($anzahl > 0) {
  // Benutzerdaten in ein Array auslesen.
  $data = $res->fetch_assoc();

  // Sessionvariablen erstellen und registrieren
  $_SESSION["user_name"] = $data["benutzername"];
  $_SESSION["user_type"] = $data["usertype"];
  header("Location: intern.php");
} else {
  header("Location: formular.php?fehler=1");
}
?>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
  }

  h1 {
    text-align: center;
    padding: 20px;
    color: #333;
  }

  hr {
    border: none;
    height: 1px;
    background-color: #ddd;
    margin: 10px 0;
  }

  a {
    display: block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  a:hover {
    background-color: #0056b3;
  }

  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
  }
</style>
