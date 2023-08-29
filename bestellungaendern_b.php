<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Datensatz anzeigen</title>
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
   $sql = "SELECT * FROM bestellung WHERE id = "
      . intval($_POST["auswahl"]);
   $res = $con->query($sql);
   $dsatz = $res->fetch_assoc();

   echo "<p>Bitte neue Inhalte eintragen und speichern:</p>";
   echo "<form action = 'bestellungaendern_c.php' method = 'post'>";

   echo "<p><input name='kid' value='"
      . $dsatz["kunde_id"] . "'> kunde_id</p>";
   echo "<p><input name='vid' value='"
      . $dsatz["vorstellung_id"] . "'> vorstellung_id</p>";
   echo "<p><input name='anz' value='"
      . $dsatz["anzahl"] . "'> anzahl</p>";
   echo "<p><input name='kkn' value='"
      . $dsatz["kreditkartenummer"] . "'> kreditkartenummer</p>";
   echo "<p><input name='kkm' value='"
      . $dsatz["kreditkartemonat"] . "'> kreditkartemonat</p>";
   echo "<p><input name='kkj' value='"
      . $dsatz["kreditkartejahr"] . "'> kreditkartejahr</p>";	  
   echo "<p><input name='ad' value='"
      . $dsatz["abholdatum"] . "'> abholdatum</p>";	  
   echo "<input type='hidden' name='oripn' value='"
      . $_POST["auswahl"] . "'>";
   echo "<p><input type='submit' value='Speichern'>";
   echo " <input type='reset'></p>";
   echo "</form>";
   
   $res->close();
   $con->close();
}
else
   echo "<p>Keine Auswahl getroffen</p>";
?>
<p>Zur <a href="bestellungaendern_a.php">Auswahl</a></p>
</body>
</html>
