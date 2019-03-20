<?php
  session_start();

  // initializing variables
  $username = "";
  $email    = "";
  $firstname ="";
  $lastname = "";
  $contact = "";
  $errors = array(); 

  // connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'hr_ms');

    if (!$db) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }

    $sql = 'SELECT * 
        FROM employee_table';
        
    $query = mysqli_query($db, $sql);

    if (!$query) {
      die ('SQL Error: ' . mysqli_error($db));
    }
    ?>