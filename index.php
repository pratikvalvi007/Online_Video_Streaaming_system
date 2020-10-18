<!DOCTYPE html>
<html>
<head>

 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  
  .navbar {
   
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: black !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
 
<!-- top bar -->
 <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="login.php">User</a>
	  <a class="navbar-brand" href="admin/login.php">Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#Crew"></a></li>
        <li><a href="#Anime">TOP SERIES</a></li>
		<li><a href="#contact">SERIES LIST</a></li>
        
      </ul>
    </div>
  </div>
</nav>


  <!-- MAIN SLIDER-->


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg" alt="LOVE" width="1000" height="100">
        <div class="carousel-caption">
         
          
        </div>      
      </div>

      <div class="item">
        <img src="2.jpg" alt="naruto" width="1000" height="100">
        <div class="carousel-caption">
          
          
        </div>      
      </div>
    
      <div class="item">
        <img src="68.png" alt="Madara" width="1000" height="100">
        <div class="carousel-caption">
          
          
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>



<!-- Container (The Band Section) -->
<div id="Crew" class="container text-center">
  <h3>ONLINE SERIES</h3>
  <p>We are Providing the best  series in our Website. The series are available in 4K</p>
  <br>
  <div class="row">
  
  
  
  
  
  
  
	
  </div>
</div>

<!-- Container (Anime Section) -->
<div id="Anime" class="bg-1">
  <div class="container">
    <h3 class="text-center">TOP SERIES </h3>
    <p class="text-center">WATCH NOW!</p>
    
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="OP.jpg" width="400" height="300">
          <p><strong>One Piece</strong></p>
          
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href='index.php' >WATCH</a></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="FLASH.jpg"  width="400" height="700">
          <p><strong>Flash</strong></p>
       
          <button class="btn" data-toggle="modal" data-target="#myModal"><a href='index.php' >WATCH</a></button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="DBZ.png" alt="San Francisco" width="400" height="200">
          <p><strong>Dragon Ball Super</strong></p>
          <button class="btn" data-target="#myModal"><a href='index.php' >WATCH</a></button>
        </div>
      </div>
    </div>
  </div>
  
  
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Series list</h3>
  <p class="text-center"><em>ALL available series </p>


	  <body class="text-center" align='right'>
      <p><b>1.Witcher</b></p>
      <p><b>2.Dragon Ball Z</b></p>
	  <p><b>3.Flash</b></p>
      <p><b>4.One Piece</b></p>
	  <p><b>Click here for more..</b></p>
	  
	 </body>
  
</div>



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a href="ho.php" data-toggle="tooltip" title="to top">Top</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
