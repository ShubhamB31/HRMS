<?php include('AttendanceProcess.php') ?>
<html lang="en">

  <head>

    <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=">
    <meta name="description" content="">
    <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Attendance</title>    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  <style>
    .vertical-menu {
    width: 200px;
    height: 375px;
    overflow-y: auto;
    }

    .vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 20px;
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
              <a class="nav-link js-scroll-trigger" href="attendance.php">Attendance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="leaveReq.php">Leave Request</a>
            </li>

            <li class="nav-item">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

              <div>
                <div class="w3-dropdown-hover">
                <button class="w3-button w3-none">Profile</button>
                  <div class="w3-dropdown-content w3-none">
                    <a href="empeditpro.php" class="w3-bar-item w3-button">Edit Profile</a>
                    <a href="#" class="w3-bar-item w3-button">Settings</a>
                  </div>
                </div>  
              </div>
              
	          </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../index.php">Logout</a>
	          </li>
          </ul>
<meta name="viewport" content="width=device-width, initial-scale=5">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</body>

</li>
      </div>
    </nav>
    </header>

  </p>
          </div>
        </div>
      </div


      
      <!-- edit form column -->
      <div class="col-md-9 Leave Application">
        <div class="alert alert-info alert-dismissable">
          
          <i class="fa fa-coffee"></i>

        </div>
<br>
        <h3>ATTENDANCE</h3>
        <br>
        <form class="form-horizontal" role="form" action = "Attendance.php" method = "post">
         
          <div class="form-group">
            <label class="col-lg-3 control-label"></label>
            <div class="col-md-7">
              
              <button type="submit" class="btn btn-primary" name="checkin">Check In</button></div>
              <span></span>
              <button type="submit" class="btn btn-primary" name="checkout">Check Out</button></div>
             
            </div>
          </div>
        </form>
      </div>
  </div>
</div>



<br>
<br>
<br>
<br>
<br>


  </body>
</html>