<?php
session_start();
$queryShow = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hr_ms');

if (!$db) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

 $sqlReport = 'SELECT * 
        FROM attendance';
        
    $queryRpert = mysqli_query($db, $sqlReport);


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



// connect to the database
$db2 = mysqli_connect('localhost', 'root', '', 'hr_ms');

if (!$db2) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

// work check out
if (isset($_POST['report'])) {
   $comapnyName =  mysqli_real_escape_string($db2, $_POST['company']);
   $location =  mysqli_real_escape_string($db2, $_POST['location']);
   $work =  mysqli_real_escape_string($db2, $_POST['work']);
   $username = mysqli_real_escape_string($db,$_SESSION['username']);
   $queryUpdate = " update attendance  set company_name = '$comapnyName' ,location = '$location',work = '$work' where user_name = '$username' and day = CURDATE()";
      
     $check1 = mysqli_query($db2, $queryUpdate);
 if (!$check1) {
  die ('SQL Error: ' . mysqli_error($db2));
}
       $_SESSION['username'] = $username;
       
}




?>