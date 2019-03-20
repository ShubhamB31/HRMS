<?php include('server.php') ?>
<html>
<head>
    <title>Registration</title>
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
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
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
                    <div class="panel-heading"><br><h2>Registration Form</h2></div><br>
                    <div class="panel-body">
                        <form method="post" class="input-group" action="register.php">
                            <?php include('errors.php'); ?>
                            <div class="input-group">
                                <label for="firstname">Firstname:</label>
                                <input type="text" placeholder="firstname" name="firstname">
                            </div>
                            <div class="input-group">
                                <label>Lastname:</label>
                                <input type="text" placeholder="Lastname" name="lastname" >
                            </div>
                            <div class="input-group">
                                <label>Username:</label>
                                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
                            </div>
                            <div class="input-group">
                                <label>Password:</label>
                                <input type="password" name="password" >
                            </div>
                            <div class="input-group">
                                <label>Confirm Password:</label>
                                <input type="password" name="confirm_password" >
                            </div>
                            <div class="input-group">
                                <label>Email:</label>
                                <input type="text" placeholder="email" name="email" >
                            </div>
                            <div class="input-group">
                                <label>Contact No.:</label>
                                <input type="text" placeholder="Contact Number" name="contact" >
                            </div>
                            <div>
                            <div><button type="submit" class="btn btn-primary">Clear</button>
                            <button type="submit" class="btn btn-primary" name="reg_user">Submit</button></div>
                            <div><p>Already a member? <a href="employee.php">Sign in</a></p></div>
                            </div>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>