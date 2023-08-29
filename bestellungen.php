<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Ausgabe in Tabelle Bestellung</title>
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
<tr><td><a href="bestellungen.php?sort=id">ID:</a></td> 
<td><a href="bestellungen.php?sort=kunde_id">Kunde ID:</a></td> 
<td><a href="bestellungen.php?sort=vorstellung_id">Vorstellung ID:</a></td> 
<td><a href="bestellungen.php?sort=anzahl">Anzahl:</a></td> 
<td><a href="bestellungen.php?sort=kreditkartenummer">Kredirkartennummer:</a></td> 
<td><a href="bestellungen.php?sort=kreditkartemonat">Kreditkartemonat:</a></td> 
<td><a href="bestellungen.php?sort=kreditkartejahr">Kreditkartejahr:</a></td> 
<td><a href="bestellungen.php?sort=abholdatum">Abholdatum:</a></td> 
</tr>

<?php
   $con = new mysqli("", "root", "", "kino");
   $sql = "SELECT * FROM bestellung";
 
   if (isset($_GET['sort']) == FALSE)
   {
     $sql .= " ORDER BY id";
   }
   elseif ($_GET['sort'] == 'id')
   {
      $sql .= " ORDER BY id";
   }
   elseif ($_GET['sort'] == 'kunde_id')
   {
      $sql .= " ORDER BY kunde_id";
   }
   elseif ($_GET['sort'] == 'vorstellung_id')
   {
      $sql .= " ORDER BY vorstellung_id";
   }
   elseif ($_GET['sort'] == 'anzahl')
   {
      $sql .= " ORDER BY anzahl";
   }
   elseif ($_GET['sort'] == 'kreditkartenummer')
   {
      $sql .= " ORDER BY kreditkartenummer";
   }
   elseif ($_GET['sort'] == 'kreditkartemonat')
   {
      $sql .= " ORDER BY kreditkartemonat";
   }
   elseif ($_GET['sort'] == 'kreditkartejahr')
   {
      $sql .= " ORDER BY kreditkartejahr";
   }
   elseif ($_GET['sort'] == 'abholdatum')
   {
      $sql .= " ORDER BY abholdatum";
   }

   $res = $con->query($sql);
   

  
   while ($dsatz = $res->fetch_assoc())
   {
      echo "<tr>";
      echo "<td>" . $dsatz["id"] . "</td>";
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
   <a href="intern.php">Zurück</a>
</body>
</html>
   

  