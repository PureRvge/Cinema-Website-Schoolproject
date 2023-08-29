<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Datensatz auswählen</title>
   <style>
      table,td {border:1px solid black;}
   </style>
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
<p>Treffen Sie Ihre Auswahl:</p>
<form action = "bestellungaendern_b.php" method = "post">
<table>
   <tr>
      <td>Auswahl</td>
      <td>Kunde ID</td>
      <td>Vorstellung ID</td>
      <td>Anzahl</td>
      <td>Kreditkartenummer</td>
      <td>Kreditkartemonat</td>
      <td>Kreditkartejahr</td>
      <td>Abholdatum</td>
   </tr>

<?php
   $con = new mysqli("", "root", "", "kino");
   $res = $con->query("SELECT * FROM bestellung");

   while ($dsatz = $res->fetch_assoc())
   {
      echo "<tr>";
      echo "<td><input type='radio' name='auswahl'";
      echo " value='" . $dsatz["id"] . "'></td>";
      echo "<td>" . $dsatz["kunde_id"] . "</td>";
      echo "<td>" . $dsatz["vorstellung_id"] . "</td>";
      echo "<td>" . $dsatz["anzahl"] . "</td>";
      echo "<td>" . $dsatz["kreditkartenummer"] . "</td>";
	  echo "<td>" . $dsatz["kreditkartemonat"] . "</td>";
      echo "<td>" . $dsatz["kreditkartejahr"] . "</td>";
      echo "<td>" . $dsatz["abholdatum"] . "</td>";
      echo "</tr>";
   }

   $res->close();
   $con->close();
?>
</table>
<p><input type="submit" value="Datensatz anzeigen"></p>
</form>
<a href="intern.php">Zurück</a> 
</body>
</html>
