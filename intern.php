<?php 
 include ("checkuser.php"); 
?> 
<!DOCTYPE html>
<html lang="de">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filmverwaltung</title>
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

    h2 {
      text-align: center;
      padding-bottom: 20px;
      color: #666;
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
</head> 
<body>
  <div class="container">
    <h1>Filmverwaltung</h1>
    <h2>Daten abrufen</h2>
    <hr>
    <a href="filme.php">Filme auflisten</a>
    <hr>
    <a href="verleiher.php">Verleiher auflisten</a>
    <hr>
    <a href="vorstellungen.php">Vorstellungen auflisten</a>
    <hr>
    <a href="kunden.php">Kunden auflisten</a>
    <hr>
    <a href="bestellungen.php">Bestellungen auflisten</a>
    <hr>
    <a href="bestellungadd.php">Neue Bestellung</a>
    <hr>
    <a href="bestellungloeschen_a.php">Bestellung löschen</a>
    <hr>
    <a href="bestellungaendern_a.php">Bestellungen ändern</a>
    <hr>  
    <a href="logout.php">Ausloggen</a> 
  </div>
</body> 
</html>
