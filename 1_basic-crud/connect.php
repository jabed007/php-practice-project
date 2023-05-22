<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die("Connection Faield: " . $conn->connect_error);
  }
  else {
    echo "Connected Successfully"; 
  }
?>