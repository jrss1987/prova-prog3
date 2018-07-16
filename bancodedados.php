<?php
  $db_host = "localhost";
  $db_login = "listacontatos";
  $db_password = "123";
  $db_db = "listacontatos";
  $conn = new mysqli($db_host, $db_login, $db_password, $db_db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

 ?>
