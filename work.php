<?php include('attendance_display/AttendanceProcess.php') ?>
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

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>EMPLOYEE PORTAL</title>    

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
        <a class="navbar-brand js-scroll-trigger" href="#page-top">LITMUS IT</a>
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
                  <div class="w3-dropdown-content w3-bar-block w3-none">
                    <a href="setting_emp.php" class="w3-bar-item w3-button">Setting</a>
                  </div>
                </div>  
              </div>
              
	          </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
             
	          </li>
          </ul>
<meta name="viewport" content="width=device-width, initial-scale=5">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</li>
      </div>
    </nav>
          
<br><br><br><br><br>
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><br><h2>Today's work status </h2></div><br>
                    <div class="panel-body">
                        <form method="post" role = "form" class="input-group" action="work.php">
                            <?php include('errors.php'); ?>                                    
                            <div class="input-group">
                                <label>Company Name  :</label>
                                <input type="text"  name="company">
                            </div>
                            <div class="input-group">
                                <label>Location  :</label>
                                  <input type="text"  name="location">
                            </div>
                            <div class="input-group">
                                <label>Work done today :</label>
                                  <input type="text"  name="work">
                            </div>
                            <br>
                            <br><br>

                            <div>
                            <div><button type="submit" class="btn btn-primary">Clear</button>
                            <button type="submit" class="btn btn-primary" name="report">Submit</button>
                            </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>




    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
     

      </div>
      <!-- /.container -->
    </footer>
  </body>
</html>