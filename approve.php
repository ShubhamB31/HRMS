<?php include('aprroveList.php') ?>
<!DOCTYPE html>
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


    <title>HR PORTAL</title>    

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
              <a class="nav-link js-scroll-trigger" href="hr.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="empmang/empmang.php">Employee Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="approve.php">Approvals</a>
            </li>
            <li class="nav-item">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

              <div>
                <div class="w3-dropdown-hover">
                <button class="w3-button w3-none">Profile</button>
                  <div class="w3-dropdown-content w3-bar-block w3-none">
                    <a href="#" class="w3-bar-item w3-button">Setting</a>
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
</body>

</li>
      </div>
    </nav>

  </p>
          </div>
        </div>
      </div

<div class="container">
    


  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
<br><br><br><br><br>  
<h3 align="center"><strong>Leave Requests </strong></h3>
</br>
  <div class="limiter">
    
      
      
          
            <table class="data-table">
              <div class="table100-head">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>User</th>
                  <th >From Date</th>
                  <th>To Date</th>
                  <th >Comment</th>
                  <th>Leave Type</th>
                  <th >
                   Approve
                  </th>
                </tr>
              </thead>
            
          </div>

          
            
              <tbody> 
                <div class="table100-body js-pscroll">
                   
                <?php
                  $no   = 1;
                  while ($row = mysqli_fetch_array($query))
                  {
                     $_SESSION['userNameToApprove'] = $row['username'];
                  echo '<tr>
                        <td >'.$no.'</td>
                        <td >'.$row['username'].'</td>
                        <td >'.$row['date_From'].'</td>
                        <td >'.$row['date_to'].'</td>
                        <td>'.$row['comment'].'</td>
                        <td>'.$row['leave_type'].'</td>
                        <td >

                       <form method="post" class="input-group" action="approve.php">
                        <input type="radio"  name ="approveSelect" value="approve">Approve
                        <input type="radio" name ="approveSelect" value="deny">Deny
                        <button type="submit" class="btn btn-primary" name="approve">Submit</button>
                        </form>
                        </td>
                        </tr>';
                    
                    $no++;
                  }
                ?>
                 </div>
              </tbody>
             
            </table>
        
      
    
  


<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script>
    $('.js-pscroll').each(function(){
      var ps = new PerfectScrollbar(this);

      $(window).on('resize', function(){
        ps.update();
      })
    });
      
    
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

  </body>
</html>





















</html>