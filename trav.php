<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Industrial visit Website </title>
  <link rel="stylesheet" href="style1.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <meta name="author" content="music">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
.home_section{
  background-image: url(img3.jpg);
  background-size: cover;
  height: 100vh;
}
.section{
  background-image: url(bg1.jpeg);
  background-size: cover;
  height: 35vh;
}

</style>
</head>
<body>
   <section class="section">
    <div class="over">
      <div class="container">
        <div class="head">
	<p id="div1"><br ><br ><br ><br ><br >
	<h1><span>INDUS EXPLORE</span></h1>
        </p><header>
  	  <div class="container">
   	   <div class="nav_bar">
     	   <div class="logo">
       	   <i class="fa-solid fa-route"></i>
        	  <h4>VISIT GO</h4>
        	   </div>

        <div class="menu_list">
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f7eed6;"> <!-- Replace #f8d7da with your desired color -->
  <!-- ... Rest of your code ... -->


        <a href="login2.php"><button class="lg_btn">HOME</button></a>

	
  <!-- Blog Dropdown -->
  <div class="dropdown">
    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"><button class="lg_btn">BLOG</button></a>
    <ul class="dropdown-menu">
      <li>
        <a href="https://www.industryweek.com/" target="_blank" class="dropdown-item">IndustryWeek</a>
      </li>
      <li>
        <a href="https://www.automationworld.com/" target="_blank" class="dropdown-item">AutomationWorld</a>
      </li>
      <li>
        <a href="https://www.machinedesign.com/" target="_blank" class="dropdown-item">Machine Design</a>
      </li>
      <li>
        <a href="https://advancedmanufacturing.org/" target="_blank" class="dropdown-item">AdvanceManufacturing</a>
      </li>
      <li>
        <a href="https://www.engineering.com/" target="_blank" class="dropdown-item">Engineering</a>
      </li>
    </ul>
  </div>

  <!-- Places Dropdown -->
  <div class="dropdown">
    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"><button class="lg_btn">PLACES</button></a>
    <ul class="dropdown-menu">
      <li>
        <a href="#" class="dropdown-item">Bengaluru</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">Maharashtra</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">Mumbai, Pune</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">Visakhapatnam</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">Hyderabad</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">Gujarat</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">Haryana, Panipat</a>
      </li>
      <li>
        <a href="#" class="dropdown-item">Chennai</a>
      </li>
    </ul>
  </div>


       

            <a href="about.php"><button class="lg_btn">About us</button></a>
            <a href="#"><button class="lg_btn">Contact Us</button></a>
            <a href="logout1.php"><button class="lg_btn">Logout</button></a>
		</nav>
          </div>
	</div>
      </div>
    </div>
  </header>
  </div>
      </div>
    </div>
  </section><br >

 

<div class="row">
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="0"
      class="active"> </button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="1"> </button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="2"> </button>
    <button
      type="button"
      data-bs-target="#carouselExampleIndicators"
      data-bs-slide-to="3"> </button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="t41.jpg" class="d-block w-100" alt="Image of music carnival" width="120" height="400"/>
    </div>
    <div class="carousel-item">
      <img src="t42.jpg" class="d-block w-100" alt="Image of music carnival" width="120" height="400"/>
    </div>
    <div class="carousel-item">
      <img src="t4.jpg" class="d-block w-100" alt="Image of music carnival" width="120" height="400"/>
    </div>
    <div class="carousel-item">
      <img src="t43.jpg" class="d-block w-100" alt="Image of music carnival" width="120" height="400"/>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" ></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" ></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br>

  <section class="home_section">
    <div class="overlay">
      <div class="container">
        <div class="home">
          <h1><span>meet</span> people <br>discover <span>places</span> <br><span>enjoy</span> time</h1>
          <div class="home_buttons">
	<form action="form_validate.php" method="POST" enctype="multipart/form-data">
            <button class="btn1">Explore World</button>	
	</form>
           
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="title">
        <h1>Visit World's best <span>Industrial Places</span></h1>
        <span class="slogan">Enjoy Your Trip</span>
      </div>
      <div class="services_boxes">
      
	<div class="box br">
    	<i class="fa-solid fa-bus"></i>
    	<h4>Tour Travel Bus</h4>
    	<p>Bus tour visits are an excellent option for travelers seeking a well-organized, informative, and social travel experience.</p>
	</div>
        <div class="box br">
          <i class="fa-solid fa-plane"></i>
          <h4>Tour Travel Plane</h4>
          <p>Plane tour visits provide a captivating and unforgettable way to discover the beauty of the world from a whole new perspective. </p>
        </div>

        <div class="box br">
          <i class="fa-solid fa-train"></i>
          <h4>Tour Travel Train</h4>
          <p>Train tour visits often follow scenic routes through breathtaking landscapes, including mountains, valleys, and countryside.  </p>
        </div>
      </div>
  </div>
  </section>

</body>
</html>

