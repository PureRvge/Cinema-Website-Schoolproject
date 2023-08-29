<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Datensatz löschen</title>
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
if (isset($_POST["auswahl"]))
{
   $con = new mysqli("", "root", "", "kino");
   $sql = "DELETE FROM bestellung WHERE"
     . " id = " . intval($_POST["auswahl"]);
   $con->query($sql);
   echo "Betroffen: $con->affected_rows<br>";
   $con->close();
}
else
   echo "<p>Keine Auswahl getroffen</p>";
?>
<p>Zur <a href="bestellungloeschen_a.php">Auswahl</a></p>
</body>
</html>
