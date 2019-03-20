<?php
  session_start();

  // initializing variables
  $username = "";
  $fromDate    = "";
  $toDate ="";
  $comment = "";
  $leaveType = "";
  $errors = array(); 

  // connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'hr_ms');

    if (!$db) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
  }
  // approve list 
   $username = mysqli_real_escape_string($db,$_SESSION['username']);
   $sqlList = "SELECT * 
        FROM leave_request where username= '$username'";
        
    $queryList = mysqli_query($db, $sqlList);

    if (!$queryList) {
      die ('SQL Error: ' . mysqli_error($db));
    }

// leave request
   if (isset($_POST['leave'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db,$_SESSION['username']);
    $fromDate = mysqli_real_escape_string($db, $_POST['fromDate']);
    $toDate = mysqli_real_escape_string($db, $_POST['toDate']);
    $comment = mysqli_real_escape_string($db, $_POST['comment']);
    $leaveType = mysqli_real_escape_string($db, $_POST['leaveType']);



    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fromDate)) { array_push($errors, "fromDate is required"); }
    if (empty($toDate)) { array_push($errors, "toDate is required"); }
    if (empty($leaveType)) { array_push($errors, "leaveType is required"); }

   
    // Finally, register user if there are no errors in the form

      //$password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO leave_request (username, date_From,date_to,comment,leave_type) 
          VALUES('$username', '$fromDate','$toDate','$comment','$leaveType')";
     $check= mysqli_query($db, $query);
     if ($check) {
      header('location: empmain.php');
      
    }else{
      die ('SQL Error: ' . mysqli_error($db));
    }
}
?>