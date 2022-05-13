<?php
  $dbhost = "localhost"; 
  
  // Nom de la database (a créer)
  $dbname = "user";
  
  $dbuser = "root";
 
  try {
    $connection = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
