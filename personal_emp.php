
<?php include('empList.php') ?>
<html>

  <head>
  <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=">
    <meta name="description" content="">
    <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Setting</title>    
     <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <script type="text/javascript" src="E:\xampp\htdocs\hrms\js\clock.js"></script>
    <link type="text/css" rel="stylesheet" href="E:\xampp\htdocs\hrms\css\clock.css">

  <style>
    .vertical-menu {
    width: 300px;
    height: 300px;
    overflow-y: auto;
    }

    .vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 300px;
    text-decoration: none;
    }

    .vertical-menu a:hover {
    background-color: #ccc;
    } 

    .vertical-menu a.active {
    background-color: #1AA3BF;
    color: white;
    }
  </style>
</head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Human Resources</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="empmain.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
            </li>
         
            <li class="nav-item">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

          </ul>
<meta name="viewport" content="width=device-width, initial-scale=5">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</body>

</li>
      </div>
    </nav>

       
       
    </header>

          </div>
        </div>
      </div
<br>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 300px;
    position: fixed;
    z-index: 1;
    top: 60;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 20px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 280px; /* Same as the width of the sidenav */
    font-size: 15px; /* Increased text to enable scrolling */
    padding: 67px 20px;
}

@media screen and (max-height: 250px) {
    .sidenav {padding-top: 30px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="setting_emp.php" class="active">Setting</a>
  <a href="editprofile_emp.php">Edit Profile</a>
  <a href="password_emp.php">Change Password</a>
</div>

<div class="main">
 

<head>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 18px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


<div class="topnav">
  <a class="home" href="tech_emp.php">Technical Details</a>
  <a class="home" href="personal_emp.php">Personal Info</a>
  <a class="home" href="joining_emp.php">joining Details</a>
</div>

<div style="padding-left:16px">
 
 
</div>

</body>
<br>
<br>
<?php $row = mysqli_fetch_array($queryPer);  ?>
 <form class="form-horizontal" role="form"  method="post"  action = "personal_emp.php">
          <div class="form-group">
            <label class="col-lg-3 control-label"><h2>Personal Information</h2> 
          </div>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Date of birth:</label>
            <div class="col-md-7">
              <input class="form-control" type="date" name = "dob" value="<?php echo $row['dob'] ?>">
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-md-7">
              <input class="form-control" type="text" name = "gender" value="<?php echo $row['gender'] ?>">
               <input type="radio" name="gender" value="female" name = "gender" >Female
               <input type="radio" name="gender" value="male" name = "gender" >Male
               <input type="radio" name="gender" value="other" name = "gender" >Other
            </div>
          </div>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Blood group:</label>
            <div class="col-md-7">
              <input class="form-control" type="text" name = "blood_gp" value="<?php echo $row['blood_gp'] ?>">
            </div>
          </div>
          <br>
	         <div class="form-group">
            <label class="col-lg-3 control-label">Nationality:</label>
            <div class="col-md-7">
              <input class="form-control" type="text" name = "nationality" value="<?php echo $row['nationality'] ?>">
            </div>
	       </div>
          <br>
	       <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-md-7">
              <input class="form-control" type="text" name = "address" value="<?php echo $row['address'] ?>">
            </div>
          </div>
          <br></br>
          <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            <div class="col-md-7">
                <button type="submit" class="btn btn-primary" name="personal">Save Changes</button></div>
              <span></span>
            </div>
          </div>
         

</form>
</html>


</body>
</html> 
<head>


        
 
          </div>
        </form>
      </div>
  </div>
</div>




<style>

.w3-main{
  position: absolute;
  top: 100px;
  left: 10px;
  width: 20px;
  height: 60px;
  padding: 80px;
}




</html> 
