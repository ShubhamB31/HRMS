<?php include('leaveReqData.php') ?>
<html>
<head>
    <title>Leave Request</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/scrolling-nav.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Litmus IT</a>
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
              <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
             
            </li>


<meta name="viewport" content="width=device-width, initial-scale=5">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      </div>
      
    </nav>


<br><br>
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><br><h2>Leave Request</h2></div><br>
                    <div class="panel-body">
                        <form method="post" class="input-group" action="leaveReq.php">
                          <?php include('errors.php'); ?>                   
                            <div class="input-group">
                                <label>From:</label>
                                <input type="date"  name="fromDate">
                            </div>
                            <div class="input-group">
                                <label>To:</label>
                                  <input type="date"  name="toDate">
                            </div>
                            <div class="input-group">
                                <label>Comment:</label>
                                  <input type="text"  name="comment">
                            </div>


                            <div class="input-group">
                              <label>Leave type</label>
                              <select class="form-control" id=" exampleSelect1"  name="leaveType">
                              <option>none</option>
                              <option>Annual Leave</option>
                              <option>Compassinate Leave</option>
                              <option>Exam Leave</option>
                              <option>Hospital Leave</option>
                              <option>Marriage Leave</option>
                              <option>Medical</option>
                              <option>No pay Leave</option>
                              </select>
                            </div>
                            <br>
                            <br><br>

                            <div>
                            <div><button type="submit" class="btn btn-primary">Clear</button>
                            <button type="submit" class="btn btn-primary" name="leave">Submit</button>
                            </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>

             <!-- show approved or not  --> 
        <div class="col-lg-6 col-lg-offset-3">
           <div class="panel panel-default">
                    <div class="panel-heading"><br><h2>Approval Status</h2></div><br>
                    <div class="panel-body">
                       
          <!--  @TODO : work here   -->
          <?php
                  
                  $row = mysqli_fetch_array($queryList);
                   ?>
                   

               <?php     echo " <b>User Name : </b> ";       echo  $row['username']  ;  echo "\n";    ?> <br><br><br>
                <?php      echo   "\n <b>From Date : </b> ";   echo   $row['date_From']; echo "\n"; ?> <br><br><br>
                <?php      echo  "\n <b>To Date : </b> ";      echo   $row['date_to']; echo "\n"; ?> <br><br><br>
                  <?php    echo   "\n <b>Comment : </b> ";     echo  $row['comment']; echo "\n";    ?> <br><br><br>      
                 <?php     echo  "\n <b>Leave Type : </b> ";     echo $row['leave_type']; echo "\n";    ?> <br><br><br>
                   <?php    echo "\n <b>Approval Status : </b> "; echo    $row['approved']; echo "\n";  ?> <br><br><br>
                    
                    
                
               
                

        </div>
         </div>
          </div>
           </div>

        <!--approval list end -->
        </div>


</div>
</body>
</html>