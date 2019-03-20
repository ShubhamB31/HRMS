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
$username = mysqli_real_escape_string($db,$_SESSION['username']);

$sql = "SELECT * 
  FROM login_table where user_name = '$username'";
  
$query = mysqli_query($db, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($db));
}


///////////////////////////

if (isset($_POST['changePassword'])) {

// receive all input values from the form
$oldPassword = mysqli_real_escape_string($db, $_POST['oldPassword']);
$newPassword = mysqli_real_escape_string($db, $_POST['newPassword']);
$confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);

$usernameFromSession = mysqli_real_escape_string($db,$_SESSION['username']);

if (empty($oldPassword)) { array_push($errors, "Old password is required"); }
if (empty($newPassword)) { array_push($errors, "New Password is required"); }
if (empty($confirmPassword)) { array_push($errors, "Password confirmation is required"); }
//for confirming old password
 $row = mysqli_fetch_array($query);
 $checkOldPassword =  $row['password'];
if(strcasecmp($checkOldPassword,$oldPassword) == 0){
if ($newPassword != $confirmPassword) {
    array_push($errors, "The two passwords do not match");
}else{
	$query6 = "update login_table set password = '$newPassword' where user_name = '$usernameFromSession'";

$check5= mysqli_query($db, $query6);
if (!$check5) {
  die ('SQL Error: ' . mysqli_error($db));
  
}
}
}
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";
   header('location: setting_emp.php');




}

////////////////////////
?>