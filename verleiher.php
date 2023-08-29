<!DOCTYPE html>
<?php 
 include ("checkuser.php"); 
?>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Ausgabe in Tabelle Verleiher</title>
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
<table>
<tr><td><a href="verleiher.php?sort=id">ID:</a></td> 
    <td><a href="verleiher.php?sort=name">Name:</a></td>
    
</tr>

<?php
   $con = new mysqli("", "root", "", "kino");
   $sql = "SELECT * FROM verleiher";

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
   

   $res = $con->query($sql);

  
   while ($dsatz = $res->fetch_assoc())
   {
      echo "<tr>";
      echo "<td>" . $dsatz["id"] . "</td>";
      echo "<td>" . $dsatz["name"] . "</td>";
     
      echo "</tr>";
      
   }
   $res->close();
   $con->close();
?>

</table>
   <a href="intern.php">Zurück</a> 
</body>
</html>
