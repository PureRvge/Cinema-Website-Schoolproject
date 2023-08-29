<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Ausgabe in Tabelle Kunde</title>
   <style>
      table,td {border:1px solid black;}
   </style>
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
</head>
<body>
<table>
<tr><td><a href="kunden.php?sort=id">ID:</a></td> 
    <td><a href="kunden.php?sort=name">Name:</a></td>
    <td><a href="kunden.php?sort=vorname">Vorname:</a></td>
    <td><a href="kunden.php?sort=strasse">Strasse:</a></td>
    <td><a href="kunden.php?sort=hausnnummer">Hausnummer:</a></td>
    <td><a href="kunden.php?sort=plz">PLZ:</a></td>
	<td><a href="kunden.php?sort=ort">Ort:</a></td>
    <td><a href="kunden.php?sort=landcode">Landcode:</a></td>
    <td><a href="kunden.php?sort=telefon">Telefon:</a></td>
    <td><a href="kunden.php?sort=email">e-Mail:</a></td>
</tr>
<?php
   $con = new mysqli("", "root", "", "kino");
   $sql = "SELECT * FROM kunde";
   if(isset($_GET['sort']) == FALSE)
   {
     $sql .= " ORDER BY id";
   }
   elseif ($_GET['sort'] == 'id')
   {
     $sql .= " ORDER BY id";
   }
   elseif ($_GET['sort'] == 'name')
   {
     $sql .= " ORDER BY name";
   }
   elseif ($_GET['sort'] == 'vorname')
   {
     $sql .= " ORDER BY vorname";
   }
   elseif ($_GET['sort'] == 'strasse')
   {
     $sql .= " ORDER BY strasse";
   }
   elseif($_GET['sort'] == 'hausnummer')
   {
     $sql .= " ORDER BY hausnummer";
   }
   elseif($_GET['sort'] == 'plz')
   {
     $sql .= " ORDER BY plz";
   }
   elseif($_GET['sort'] == 'ort')
   {
     $sql .= " ORDER BY ort";
   }
   elseif($_GET['sort'] == 'landcode')
   {
     $sql .= " ORDER BY landcode";
   }
   elseif($_GET['sort'] == 'telefon')
   {
     $sql .= " ORDER BY telefon";
   }
   elseif($_GET['sort'] == 'email')
   {
     $sql .= " ORDER BY email";
   }

   $res = $con->query($sql);

  
   while ($dsatz = $res->fetch_assoc())
   {
      echo "<tr>";
      echo "<td>" . $dsatz["id"] . "</td>";
      echo "<td>" . $dsatz["name"] . "</td>";
      echo "<td>" . $dsatz["vorname"] . "</td>";
      echo "<td>" . $dsatz["strasse"] . "</td>";
      echo "<td>" . $dsatz["hausnummer"] . "</td>";
      echo "<td>" . $dsatz["plz"] . "</td>";
      echo "<td>" . $dsatz["ort"] . "</td>";
      echo "<td>" . $dsatz["landcode"] . "</td>";
      echo "<td>" . $dsatz["telefon"] . "</td>";
      echo "<td>" . $dsatz["email"] . "</td>";
      echo "</tr>";
      
   }
   $res->close();
   $con->close();
?>

</table>
	<a href="intern.php">Zurück</a> 
</body>
</html>
