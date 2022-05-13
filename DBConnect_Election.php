<?php
  $dbhost = "localhost"; 
  
  $dbname = "Election";
  
  $dbuser = "root";
 
  try {
    $connection = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
