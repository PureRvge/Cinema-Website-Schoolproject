<?php session_start (); ?> 
<html> 
<head> 
  <title>Login</title> 
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
if (isset ($_REQUEST["fehler"])) 
{ 
  echo "Die Zugangsdaten waren ungültig."; 
} 
?> 
<form action="login.php" method="post"> 
  Name: <input type="text" name="name" size="20"><br> 
  Kennwort: <input type="password" name="pwd" size="20"><br> 
  <input type="submit" value="Login"> 
</form> 
</body> 
</html>
