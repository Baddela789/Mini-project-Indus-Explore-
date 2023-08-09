<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews page</title>
   <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="ex1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  
  <style>
 
    .contactbody {
      background-image: url(8d4.jpg);
   background-size: cover;
}
.footer{
    margin-top: 80px;
    background-image: url(hd8.jpg);
   background-size: cover;
}
nav{
    width: 100%;
    position: fixed;
    background-image: url(hd9.jpg);
   background-size: cover;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 15%);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
contact-form form input,form textarea,form select,form rating{
    width: 100%;
    padding: 17px;
    border: none;
    outline: none;
    background-color: #191919;
    font-size: 20px;
    color: white;
    margin-bottom: 10px;
    border-radius: 10px;
}
</style>  
</head>



<body class="contactbody">
           <nav>
            <img src="ielogo.png" class="logo" alt="Logo" title="Travels">

            <ul class="navbar">
                <li>
                    <a href="trav.php">Home</a>
                     <a href="about.php">About Us</a>
                    <a href="contact.php">Contact Us</a>
		    <a href="booking.php">Booking</a>
		   <a href="login2.php">Logout</a>
                </li>
            </ul>
        </nav>

 
<script>
	function validateForm(){
		alert("Thanks For Your Review ~~~ Have a Good Day:) ...IndusExplore!");
		return true;
	}
</script>

        <section class="contact">
            <div class="contact-form">
                <h1>Review<span>Statements</span></h1>
                <p>Share your thoughts and experiences with us! Your valuable review helps us continue to provide exceptional industrial tours and enriching journeys with IndusExplore.</p>
            <form action="reviewform.php" method="POST" onsubmit="return validateForm()">
                <input type="text" name="name" placeholder="Your Name" required><br>
                <input type="email" name="email" placeholder="Your E-mail" required>
             

	      <div class="star-rating">
                <label for="rating"> </label>
                <select name="rating" id="rating" required>
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Star</option>
                </select>
            </div>

                <textarea name="message" cols="30" rows="10" placeholder="Review" required></textarea>
                <input type="submit" value="Submit Review" class="submit-btn">
          </form>
            </div>
            
        </section>

<!-- Footer -->
 

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
