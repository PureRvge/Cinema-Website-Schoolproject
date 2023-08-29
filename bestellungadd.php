<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Eingabe von Bestellung</title>
<?php
   if (isset($_POST["gesendet"]))
   {
      $con = new mysqli("", "root", "", "kino");
      $ps = $con->prepare("INSERT INTO bestellung"
         . "(kunde_id, vorstellung_id, anzahl, kreditkartenummer, kreditkartemonat, kreditkartejahr, abholdatum)"
         . "VALUES(?, ?, ?, ?, ?, ?, ?)");
      $ps->bind_param("iiisiis", $_POST["kunde_id"], 
               $_POST["vorstellung_id"], $_POST["anzahl"], $_POST["kreditkartenummer"], $_POST["kreditkartemonat"], $_POST["kreditkartejahr"], $_POST["abholdatum"]);
      $ps->execute();

      if ($ps->affected_rows > 0)
         echo "Datensatz hinzugekommen<br>";
      else
         echo "Fehler, kein Datensatz hinzugekommen<br>";

      $ps->close();
      $con->close();
   }
   
?>
</head>
</style>
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

 .tabelle {
   
   padding: 10px 20px;
   background-color: #007bff;
   color: #fff;
   text-decoration: none;
   transition: background-color 0.3s ease;
   cursor: pointer;
 }

 .tabelle:hover {
   background-color: #0056b3;
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
<body>
<p>Geben Sie bitte einen Datensatz ein<br>
und senden Sie das Formular ab:</p>
<form action = "bestellungadd.php" method = "post">
   <p><input name="kunde_id"> Kunde ID</p>
   <p><input name="vorstellung_id"> Vorstellung ID</p>
   <p><input name="anzahl"> Anzahl (11)</p>
   <p><input name="kreditkartenummer"> Kreditkartenummer (16)</p>
   <p><input name="kreditkartemonat"> Kreditkartemonat (2)</p>
   <p><input name="kreditkartejahr"> Kreditkartejahr (4)</p>
   <p><input name="abholdatum"> Abholdatum (0000-00-00 00:00:00)</p>
   <p><input type="submit" name="gesendet">
   <input type="reset"></p>
</form>


		<a href="intern.php">Zurück</a> 

</body></html>
