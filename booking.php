<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link rel="stylesheet" type="text/css" href="ex1.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
  

.booking-section {
    text-align: center;
    padding: 100px 0;
      background-image: url(hd3.jpg);
   background-size: cover;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
     color: #fc0050;
}

p {
    font-size: 18px;
    margin-bottom: 30px;
   color: white; 
}

.book-button {
    display: inline-block;
    padding: 15px 25px;
    background-color: #fc0050;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.book-button:hover {
    background-color: #e60042;
}
 .aboutbody {
      background-image: url(bgr3.jpeg);
   background-size: cover;
     
    }
nav{
    width: 100%;
    position: fixed;
     background-image: url(br2.jpeg);
   background-size: cover;
    box-shadow: 6px 6px 40px rgba(0, 0, 0, 15%);
    display: flex;
    align-items: center;
    justify-content: space-between;
	height: 140px;
}

nav .logo{
    width: 60px;
    margin: 2vh;
    margin-left: 8%;
}

nav ul li{
    list-style: none;
    display: inline-block;
    margin-left: 40px;
}
.navbar{
    display: flex;
    margin-right: 4vh;
}

.navbar a{
    color: white;
    font-size: 18px;
    padding: 10px 22px;
    border-radius: 4px;
    font-weight: 500;   
    text-decoration: none;
    transition: ease 0.40s;
}

.navbar a:hover,.navbar a.active{
    background: white;
    color: black;
    box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
    border-radius: 5px;
    
}

nav ul li a{
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-size: 17px;
}
nav h2{
	color: white;
	 text-decoration: none;
	font-size: 25px;
	
	 text-align: center;
} 
nav h2 span{
    color: #fc0050;
   font-size: 26px;
}
.footer{
    margin-top: 80px;
    background-image: url(bus1.jpg);
   background-size: cover;
}
.review-section {
   
    padding: 30px;
    text-align: center;
}

.review-section p {
    font-size: 18px;
    margin-bottom: 20px;
}

.review-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #fc0050;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.review-button:hover {
    background-color: #e60042;
}

.footer{
    margin-top: 80px;
    background-image: url(bus.jpeg);
   background-size: cover;
}

.slideshow-container {
    max-width: 1500px;
    margin: auto;
    position: relative;
    overflow: hidden;
}

.slide {
    display: none;
}

.slide img {
    width: 100%;
    height: 450px;
}

/* Additional styling for slide animation */
.fade {
    animation: fade 5s ease-in-out infinite;
}

@keyframes fade {
    0% { opacity: 0; }
    20% { opacity: 1; }
    80% { opacity: 1; }
    100% { opacity: 0; }
}

</style>
</head>

<body class ="aboutbody">

        <nav>
            <img src="ielogo.png" class="logo" alt="Logo" title="Travels">
		<h2><span>Booking System</span></h2>
            <ul class="navbar">
   
             <li>
                   
                    <a href="trav.php">Home</a>
                    <a href="contact.php">Contact Us</a>
		    <a href="login2.php">Logout</a>
                </li>
            </ul>
        </nav>

    
<br><br><br><br><br><br><br>
<div class="slideshow-container">
    <div class="slide fade">
        <img src="hd7.jpg" alt="Slide 1">
    </div>
    <div class="slide fade">
        <img src="hd4.jpg" alt="Slide 2">
    </div>
    <div class="slide fade">
        <img src="hd5.jpg" alt="Slide 3">
    </div>
   <div class="slide fade">
        <img src="hd6.jpg" alt="Slide 3">
    </div>
</div>

<div class="booking-section">
	<br >
        <br ><br ><h1>Book Your Bus Tickets</h1>
        <p>Click the button below to book your bus tickets with AbhiBus:</p>
	
       <a href="https://www.abhibus.com" class="book-button" id="bookButton">
            <i class="fas fa-bus"></i> Book Now
        </a><br><br>
	
 <div class="review-section">
        <br><br>
        <p>"After your trip, we would appreciate it if you could provide a review for IndusExplore."</p>
      <a href="your_php_file.php" class="book-button review-button" id="reviewButton">
        <i class="fas fa-star"></i> Review
</a>
 </div>
</div>

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
		    <li><a href="review.php">Review us</a></li>
                </ul>
            </div>

           <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    
                    <a href="https://www.instagram.com/nandinidmmrk" target="_blank"><i class='bx bxl-instagram' ></i></a>
                   
                    <a href="https://www.linkedin.com/in/baddela-nandini-1st-a721781b9" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    
                    <a href="https://github.com/Baddela789" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            
        </div>
    </div>

    <div class="end">
        <p>IndusExplore is a Industrial Visit Travels.<br>Website developed by: B.Nandini</p>
    </div>
</section>

</body>
</html>

    <script> 
    document.getElementById('bookButton').addEventListener('click', function() {
    // Replace with the actual AbhiBus booking URL
    const abhiBusBookingUrl = 'https://www.abhibus.com';
    
    // Redirect to the AbhiBus website for booking
    window.location.href = abhiBusBookingUrl;
});


</script>

<script>
const slides = document.querySelectorAll(".slide");
let slideIndex = 0;

function showSlides() {
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex = (slideIndex + 1) % slides.length;
    slides[slideIndex].style.display = "block";
    setTimeout(showSlides, 5000); // Change slide every 5 seconds
}

showSlides(); // Start the slideshow
</script>
</body>
</html>

