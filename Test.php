<?php
  $conn = new mysqli("localhost", "root", "mySecretDBpass", "abubakar");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';

  $result = $conn->query("SELECT employee, depart_emp
  FROM employee, depart_emp 
  WHERE id=10003 and ");

  echo "Number of rows: $result->num_rows";

  $result->close();

  $conn->close();
?>