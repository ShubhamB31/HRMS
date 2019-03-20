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

// for edit details show
$username = mysqli_real_escape_string($db,$_SESSION['username']);
$sqlForEdit = "SELECT * 
  FROM employee_table where user_name = '$username'";
  
$query1 = mysqli_query($db, $sqlForEdit);

if (!$query1) {
  die ('SQL Error: ' . mysqli_error($db));
}
// for show tech details

$username = mysqli_real_escape_string($db,$_SESSION['username']);
$sqlFortechDetail = "SELECT * 
  FROM employee_table where user_name = '$username'";
  
$query5 = mysqli_query($db, $sqlFortechDetail);

if (!$query5) {
  die ('SQL Error: ' . mysqli_error($db));
}

// for show personal details

$username = mysqli_real_escape_string($db,$_SESSION['username']);
$sqlFortechDetail = "SELECT * 
  FROM employee_table where user_name = '$username'";
  
$queryPer = mysqli_query($db, $sqlFortechDetail);

if (!$queryPer) {
  die ('SQL Error: ' . mysqli_error($db));
}



// for edit 
$db1  = mysqli_connect('localhost', 'root', '', 'hr_ms');
if (isset($_POST['edit_profile'])) {
// receive all input values from the form
$firstname = mysqli_real_escape_string($db1, $_POST['firstname']); 
$lastname = mysqli_real_escape_string($db1, $_POST['lastname']);
$username = mysqli_real_escape_string($db1, $_POST['username']);
$email = mysqli_real_escape_string($db1, $_POST['email']);
$contact = mysqli_real_escape_string($db1, $_POST['contact']);

$usernameFromSession = mysqli_real_escape_string($db1,$_SESSION['username']);


// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($firstname)) { array_push($errors, "firstname is required"); }
if (empty($lastname)) { array_push($errors, "lastname is required"); }
if (empty($contact)) { array_push($errors, "contact is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }



  $query2 = "update employee_table set user_name = '$username', firstname = '$firstname' , lastname = '$lastname',email= '$email' ,
  contact = '$contact' where user_name = '$usernameFromSession'";
 

  $query3 = "update login_table set user_name = '$username' where user_name = '$usernameFromSession'";

  $check3= mysqli_query($db1, $query3);
  $check2= mysqli_query($db1, $query2);
 if (!$check2) {
  die ('SQL Error: ' . mysqli_error($db1));
  
}if (!$check3) {
  die ('SQL Error: ' . mysqli_error($db1));
  
}
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";
   header('location: setting_emp.php');

}
// for tech-details

   $db2  = mysqli_connect('localhost', 'root', '', 'hr_ms');
if (isset($_POST['technical'])) {
// receive all input values from the form
$department = mysqli_real_escape_string($db2, $_POST['department']);
$designation = mysqli_real_escape_string($db2, $_POST['designation']);
$email = mysqli_real_escape_string($db2, $_POST['email']);
$salary = mysqli_real_escape_string($db2, $_POST['salary']);
$contact = mysqli_real_escape_string($db2, $_POST['contact']);
$city = mysqli_real_escape_string($db2, $_POST['city']);
$state = mysqli_real_escape_string($db2, $_POST['state']);

$usernameFromSession = mysqli_real_escape_string($db2,$_SESSION['username']);


// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array

if (empty($department)) { array_push($errors, "Department is required"); }
if (empty($designation)) { array_push($errors, "Designation is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($salary)) { array_push($errors, "Salary is required"); }
if (empty($contact)) { array_push($errors, "Contact is required"); }
if (empty($city)) { array_push($errors, "City is required"); }
if (empty($state)) { array_push($errors, "State is required"); }



  $query4 = "update employee_table set department = '$department', designation = '$designation' , email = '$email', salary = '$salary' ,
  contact = '$contact' , city = '$city' , state = '$state' where user_name = '$usernameFromSession'";

$check4= mysqli_query($db2, $query4);
if (!$check4) {
  die ('SQL Error: ' . mysqli_error($db2));
  
}

  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";
   header('location: setting_emp.php');

}

// for personal-details

if (isset($_POST['personal'])) {
  $dbForPer = mysqli_connect('localhost', 'root', '', 'hr_ms');

if (!$dbForPer) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

// receive all input values from the form
$dob = mysqli_real_escape_string($dbForPer, $_POST['dob']);
$gender = mysqli_real_escape_string($dbForPer, $_POST['gender']);
$blood_gp = mysqli_real_escape_string($dbForPer, $_POST['blood_gp']);
$nationality = mysqli_real_escape_string($dbForPer, $_POST['nationality']);
$address = mysqli_real_escape_string($dbForPer, $_POST['address']);

$usernameFromSession = mysqli_real_escape_string($db2,$_SESSION['username']);


// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array

if (empty($dob)) { array_push($errors, "Date of birth is required"); }
if (empty($gender)) { array_push($errors, "gender is required"); }
if (empty($blood_gp)) { array_push($errors, "blood Group is required"); }
if (empty($nationality)) { array_push($errors, "Nationality is required"); }
if (empty($address)) { array_push($errors, "Address is required"); }


  $query6 = "update employee_table set dob = '$dob', gender = '$gender' ,blood_gp = '$blood_gp' , nationality = '$nationality',
  address = '$address' where user_name = '$usernameFromSession'";

$check5= mysqli_query($dbForPer, $query6);
if (!$check5) {
  die ('SQL Error: ' . mysqli_error($dbForPer));
  
}

  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";
   header('location: setting_emp.php');




}

// for show joining details
  $dbForjoin = mysqli_connect('localhost', 'root', '', 'hr_ms');

if (!$dbForjoin) {
die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$username = mysqli_real_escape_string($db,$_SESSION['username']);
$sqlForjoinDetail = "SELECT * 
  FROM employee_table where user_name = '$username'";
  
$queryjoin = mysqli_query($dbForjoin, $sqlForjoinDetail);

if (!$queryjoin) {
  die ('SQL Error: ' . mysqli_error($dbForjoin));
}


// receive all input values from the form
if (isset($_POST['joining'])) {
$doj = mysqli_real_escape_string($dbForjoin, $_POST['doj']);
$doc = mysqli_real_escape_string($dbForjoin, $_POST['doc']);
$dob = mysqli_real_escape_string($dbForjoin, $_POST['dob']);
$previousCompany = mysqli_real_escape_string($dbForjoin, $_POST['previousCompany']);
$salary = mysqli_real_escape_string($dbForjoin, $_POST['salary']);

$usernameFromSession = mysqli_real_escape_string($db2,$_SESSION['username']);


// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array

if (empty($doj)) { array_push($errors, "Date of joining is required"); }
if (empty($doc)) { array_push($errors, "Date bof confirmation is required"); }
if (empty($dob)) { array_push($errors, "Date of birth is required"); }
if (empty($previousCompany)) { array_push($errors, "Previous company is required"); }
if (empty($salary)) { array_push($errors, "salary is required"); }


  $query6 = "update employee_table set doj = '$doj', doc = '$doc' ,dob = '$dob' , previousCompany = '$previousCompany',
  salary = '$salary' where user_name = '$usernameFromSession'";

$check5= mysqli_query($dbForjoin, $query6);
if (!$check5) {
  die ('SQL Error: ' . mysqli_error($dbForjoin));
  
}

  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";
   header('location: setting_emp.php');




}


?>