<?php 
// Wird ausgeführt um mit der Ausgabe des Headers zu warten. 
ob_start (); 

session_start (); 
session_unset (); 
session_destroy (); 

header ("Location: formular.php"); 
ob_end_flush (); 
?> 
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
