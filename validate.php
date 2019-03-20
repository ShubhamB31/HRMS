<?php  //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM login_table WHERE user_name='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.

// $_SESSION['username'] = $username;

if(!isset($_SESSION["username"]) ){
    header("location:login.html");
    exit();
}else if ($count == 1 ){
	$_SESSION['username'] = $username;
	session_start();

	header('Location:hr.php');
}
}
//3.1.4 if the user is logged in Greets the user with message
// if (isset($_SESSION['username']) and $count == 1)){
// $username = $_SESSION['username'];
// header('Location:hr.html');
// echo "Hai " . $username . "
// ";
// echo "This is the Members Area
// ";
// echo "<a href='index.php'>Logout</a>";
 

?>