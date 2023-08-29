<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Datensatz ändern</title>
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
<?php
   $oripn = $_POST["oripn"];
   $con = new mysqli("", "root", "", "kino");
   
   $ps = $con->prepare("UPDATE bestellung SET kunde_id = ?,"
      . " vorstellung_id = ?, anzahl = ?, kreditkartenummer = ?,"
      . " kreditkartemonat = ?, kreditkartejahr = ?, abholdatum = ? WHERE id = $oripn");
	  
   $ps->bind_param("iiisiis", $_POST["kid"], $_POST["vid"],
      $_POST["anz"], $_POST["kkn"], $_POST["kkm"], $_POST["kkj"], $_POST["ad"]);
	  
   $ps->execute();

   if ($ps->affected_rows > 0)
      echo "Datensatz geändert<br>";
   else
      echo "Fehler, Datensatz nicht geändert<br>";

   $ps->close();
   $con->close();
?>
<p>Zur <a href="bestellungaendern_a.php">Auswahl</a></p>
</body>
</html>
