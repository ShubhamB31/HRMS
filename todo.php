
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
  <link rel="stylesheet" href="E:\xampp\htdocs\hrms\css\todo.css">

    <title>TODO LIST</title>    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
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
              <a class="nav-link js-scroll-trigger" href="#">Employee management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Approvals</a>
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
      </div>
    </nav>

     <header class="bg-primary text-white">
      <div class="container text-center">
        <img src="images/logo.jpg" class="img-circle" alt="Cinque Terre" width="200" height="175">
        <h1>Litmus Information System LLP</h1>
        <p class="lead">HR PORTAL</p>
      </div>
    </header>
          </div>
        </div>
      </div>



<br>

<div id="myDIV" class="header">
  <h2 style="margin:10px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <button><span onclick="newElement()" class="addBtn">Add</span></button>
</div>

<ul id="myUL">
</ul>

<script>
// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>


<br>
<br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
      </div>
      <!-- /.container -->
    </footer>
  </body>
</html>