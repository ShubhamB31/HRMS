<?php
session_start();
$queryShow = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hr_ms');

if (!$db) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}


// attendeance check in 
if (isset($_POST['checkin'])) {
   
   $username = mysqli_real_escape_string($db,$_SESSION['username']);
   $query = "INSERT INTO attendance (day, time_in,user_name) 
          VALUES(NOW(),NOW(),'$username')";
      
     $check = mysqli_query($db, $query);
 if (!$check) {
  die ('SQL Error: ' . mysqli_error($db));
}
       $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: empmain.php');
}


// attendeance check out
if (isset($_POST['checkout'])) {
   
   $username = mysqli_real_escape_string($db,$_SESSION['username']);
   $query = " update attendance set time_out = NOW() where user_name = '$username'";
      
     $check = mysqli_query($db, $query);
 if (!$check) {
  die ('SQL Error: ' . mysqli_error($db));
}
       $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: empmain.php');
}


// show attenance
$sqlShow = "SELECT * 
  FROM attendance where day = CURDATE()";
  
$queryShow = mysqli_query($db, $sqlShow);

if (!$queryShow) {
  die ('SQL Error: ' . mysqli_error($db));
}

?>