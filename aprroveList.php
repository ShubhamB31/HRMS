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

    $sql = "SELECT * 
        FROM leave_request where approved != 'yes' or approved is null";
        
    $query = mysqli_query($db, $sql);

    if (!$query) {
      die ('SQL Error: ' . mysqli_error($db));
    }


   if (isset($_POST['approve'])) {
    // receive all input values from the form
    $approved = mysqli_real_escape_string($db, $_POST['approved']);
    $username = mysqli_real_escape_string($db,$_SESSION['userNameToApprove']);
    $radioVal = mysqli_real_escape_string($db,$_POST['approveSelect']);
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($approved)) { array_push($errors, "approve/deny is required"); }
  
     
    $setApproved ="";
    if($radioVal == "approve")
    {
      $setApproved = "yes";
    }
    else if ($radioVal == "deny")
    {
      $setApproved = "no";
    }
    
   
    // Finally, register user if there are no errors in the form

      //$password = md5($password_1);//encrypt the password before saving in the database

      $query2 = "update leave_request set approved = '$setApproved' where username = '$username' ";
     $check2= mysqli_query($db, $query2);
     if (!$check2) {
      die ('SQL Error: ' . mysqli_error($db));
      
    }
        

          
  }
    ?>