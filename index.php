<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>LitmusIT</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
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
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="register.php">Register</a>
            </li>
            <li class="nav-item">
            <div>
              <div class="w3-dropdown-hover">
                <button class="w3-button w3-none">Login</button>
                  <div class="w3-dropdown-content w3-bar-block w3-none">
                    <a href="employee.php" class="w3-bar-item w3-button">Employee</a>
                    <a href="login.php" class="w3-bar-item w3-button">HR</a>
                  </div>
              </div>
            </div>
            </li>

<meta name="viewport" content="width=device-width, initial-scale=5">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <img src="images/logo.jpg" class="img-circle" alt="Cinque Terre" width="200" height="175">
        <h1>Litmus Information System LLP (HRMS)</h1>
        <p class="lead">An IT Infrastructure Consulting & Services Organisation</p>
      </div>
    </header>
    <!--Slider-->
        <div id="slider-wrapper">
  <div class="inner-wrapper">
    <input checked type="radio" name="slide" class="control" id="Slide1" />
    <label for="Slide1" id="s1"></label>
    <input type="radio" name="slide" class="control" id="Slide2" />
    <label for="Slide2" id="s2"></label>
    <input type="radio" name="slide" class="control" id="Slide3" />
    <label for="Slide3" id="s3"></label>
    <input type="radio" name="slide" class="control" id="Slide4" />
    <label for="Slide4" id="s4"></label>
    <div class="overflow-wrapper">
      <a class="slide" href=""><img src="images\img1.jpg" /></a>
      <a class="slide" href=""><img src="images\img2.jpg" /></a>
      <a class="slide" href=""><img src="images\img3.jpg" /></a>
      <a class="slide" href=""><img src="images\img4.jpg" /></a>
    </div>
  </div>
</div>
<style>
#slider-wrapper {
  width: 940px;
  height: 470px;
  margin: 50px auto;
  position: relative;
  margin-bottom: 0px;
  background: rgba(0, 0, 0, 0.5);
  overflow: hidden;
}

#s1 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: -36px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s2 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: -12px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s3 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: 12px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s4 {
  padding: 6px;
  background: #000000;
  position: absolute;
  left: 50%;
  bottom: 25px;
  margin-left: 36px;
  border-radius: 20px;
  opacity: 0.3;
  cursor: pointer;
  z-index: 999;
}

#s1:hover,
#s2:hover,
#s3:hover,
#s4:hover {
  opacity: .50;
}

.inner-wrapper {
  width: 940px;
  height: 470px;
  position: absolute;
  top: 0;
  left: 0;
  margin-bottom: 0px;
  overflow: hidden;
}

.control {
  display: none;
}

#Slide1:checked ~ .overflow-wrapper {
  margin-left: 0%;
}

#Slide2:checked ~ .overflow-wrapper {
  margin-left: -100%;
}

#Slide3:checked ~ .overflow-wrapper {
  margin-left: -200%;
}

#Slide4:checked ~ .overflow-wrapper {
  margin-left: -300%;
}

#Slide1:checked + #s1 {
  opacity: 1;
}

#Slide2:checked + #s2 {
  opacity: 1;
}

#Slide3:checked + #s3 {
  opacity: 1;
}

#Slide4:checked + #s4 {
  opacity: 1;
}

.overflow-wrapper {
  width: 400%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  overflow-y: hidden;
  z-index: 1;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.slide img {
  width: 25%;
  float: left;
  height: 100%;
}
</style>
<!--end-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About Us</h2>
            <p class="lead">
          <h5><strong>Litmus IT is formed and managed by Entrepreneurs from IT Industry</strong></h5>
					<ul class="arrow-list colored">
						<li>Each having 25+ years of experience</li>
						<li>Worked at Leadership level for renowned IT industry giants</li>
						<li>Experience in delivering services to Global Clients</li>
						<li>Handled huge System Integration projects for large banks</li>
						<li>Partnership with leading Hardware and Software OEMs</li>
						<li>Information Security Compliance product and services</li>
					</ul>
					
					<hr class="divider-dashline colored mb-25px">
					
					<h5><strong>Social Cause in our Business Operations</strong></h5>
					<ul class="arrow-list colored">
						<li>Apart from deploying well experienced and certified technical hands from the industry, we also have model of getting engineering freshers from 3rd Tier Cities or Rural India</li>
						<li> They are transformed from being a Graduate to be a Professional in our competency center
</li>
						<li>Trained them in latest Industry / Corporate technologies</li>
						<li>Provide them with ITIL process awareness</li>
						<li>Information Security awareness</li>
						<li>Trained them in Soft Skills for Communication, Mail Etiquettes, Culture awareness etc
By this, we attempt to groom and provide opportunities to these fresh graduates from Rural India to work confidently for Corporate India.
</li>
					</ul>
					</br>
					<h5><strong>Advantage to our customers:</strong></h5>
					<ul class="arrow-list colored">
						<li>Longitivity of Service</li>
						<li>Adaptability to Learn New things</li>
						<li>Cost Advantage</li>
					</ul>
				
			</div> <!-- end full-width columns -->
			
		</div> <!-- end 1080 pixels Container -->
	</section>
	<!-- end Page Content -->

</p>
            <ul>
             
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">
<li>Our System Integration Services provides:</li>
<li>Best fitted IT Infrastructure solution, post thorough understanding of your business needs</li>
<li>Seamlessly interconnecting systems and applications to provide best solution to run your business operation smoothly</li>
<li>Technology Guidance and Selection</li>
<li>Network Integration</li>
<li>Platform Integration</li>
<li>Datacenter Setup</li>
<li>Continuity of Business planning</li>
<li>Disaster recovery services</li>
<li>Enable migration of systems to latest versions</li>
<li>IT Optimization and Virtualization Solution</li>
<li>Consolidation of Infrastructure</li>
<li>Cloud assessment and migration</li>
<li>Implementing business-aligned enterprise security strategies that improve risk management, productivity, data integrity and compliance</li>
<li>Mobile computing - increasing productivity, improving service access and building customer loyalty through enterprise mobile solutions</li>
<li>Many organizations are in the process of reducing IT Infrastructure costs and maximizing their flexibility by moving some of their systems and applications to the cloud.</li>
</p>
          </div>
        </div>
      </div>
    </section>
<section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead"> 

<li>202, Options Primo, near Passport Office, Andheri(E), Mumbai- 400093</li>
<li>+91-9999999999</li>
<li>support@litmusit.com</li>
</p>
          </div>
        </div>
      </div>
    </section>



    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
      </div>
    </footer>
</body>
</html>