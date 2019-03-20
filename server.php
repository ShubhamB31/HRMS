  <!-- for register -->
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

  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']); 
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);



    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($firstname)) { array_push($errors, "firstname is required"); }
    if (empty($lastname)) { array_push($errors, "lastname is required"); }
    if (empty($contact)) { array_push($errors, "contact is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM employee_table WHERE user_name=$username and email=$email and contact=$contact";
    $result = mysqli_query($db, $user_check_query);
    if($result == true) { 
      die(mysql_error()); // TODO: better error handling
  }else{
    $user = mysqli_fetch_assoc($result);
    }
    if ($user) { // if user exists
      if ($user['user_name'] == $username) {
        array_push($errors, "Username already exists");
      }
      if ($user['email'] == $email) {
        array_push($errors, "email already exists");
      }
      if ($user['contact'] == $contact) {
        array_push($errors, "contact already exists");
      }
     
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      //$password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO employee_table (user_name, firstname,lastname,email,contact) 
          VALUES('$username', '$firstname','$lastname','$email','$contact')";
      mysqli_query($db, $query);

      $query1 = "INSERT INTO login_table (user_name,password,role) 
          VALUES('$username', '$password_1','employee')";
      mysqli_query($db, $query1);
      
       $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: employee.php');

          }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    // $password = md5($password);
    $query = "SELECT * FROM login_table WHERE user_name='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: hr.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

//enployee_login
if (isset($_POST['login_user_emp'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    // $password = md5($password);
    $query = "SELECT * FROM login_table WHERE user_name='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: empmain.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
