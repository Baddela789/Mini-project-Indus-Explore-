<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECE maps</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="ex1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

 <style>
       .location-body{
     background-image: url(8d2.jpg);
   background-size: cover;
}

.location-section{
    padding: 110px;
    height: 100%;
    min-height: 100vh;
}

.location-heading h1{
    margin-top: 20px;
    font-size: 60px;
    margin-bottom: 20px;
}

.location-heading h1 span{
    color: #fc0050;
}

.location-detail h1{
    padding-top: 60px;
    color: #fc0050;
    font-size: 40px;
}

.location-detail p{
    font-size: 20px;
    margin-top: 40px;
    margin-bottom: 10px;
   color: white;
}

.location-img img{
    height: 400px;
    width: 400px;
    margin-top: 30px;
    margin-bottom: 30px;
    border-radius: 5px; 
      float: left;
    margin-right: 10px;  
	
}
.location-img img:hover {
   filter: brightness(120%);
    transform: scale(1.03);
    cursor: pointer;
   transition: all 0.3s cubic-bezier(0.445,0.05,0.55,0.95);
}

.location-description p {
    font-size: 18px;
    color: #fc0050;
    display: left;
}
.location-content {
    overflow: hidden; /* Contain floats within the parent */
}


.stars i{
    font-size: 20px;
    color: rgb(197, 167, 44);
}
.footer{
    margin-top: 80px;
    background-image: url(8d2.jpg);
   background-size: cover;
}
nav{
    width: 100%;
    position: fixed;
    background-image: url(bgr4.jpeg);
   background-size: cover;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 15%);
    display: flex;
    align-items: center;
    justify-content: space-between;
}


.review-section {
	 background-image: url(8d3.jpg);
   background-size: cover;
    background-color: ;
    padding: 80px 0;
    text-align: center;
}

.review-heading h2 {
    font-size: 36px;
    color: #fc0050;
    margin-bottom: 20px;
}

.customer-review {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    margin-top: 30px;
}

.review {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    width: 300px;
}

.review p {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}

.reviewer-name {
    font-size: 14px;
    color: #777;
}
    </style>
</head>
<body class="location-body">
    <nav>
        <img src="ecelogo.png" class="logo" alt="Logo" title="Travels">

        <ul class="navbar">
            <li>
                <a href="trav.php">Home</a>
       	        <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
		 <a href="booking.php">Booking</a>
            </li>
        </ul>
    </nav>
<section class="location-section">
    <div class="location-heading">
        <h1>Explore the <span>Industrial Marvels</span></h1>
    </div>
 <div class="location-detail" id="Hbots">
    <h1>HBots Robotics</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
    </div>
    <p >HBots Robotics is a company focused on providing advanced robotics solutions and technologies. With a commitment to innovation and automation, HBots Robotics specializes in the design, development, and deployment of robotic systems across various industries. HBots Robotics aims to revolutionize industries by harnessing the power of robotics to address challenges and create opportunities for increased productivity, safety, and effectiveness. Their commitment to pushing the boundaries of robotics technology makes them a key player in the rapidly evolving field of robotics and automation.The company's offerings include robotic platforms, automation solutions, and AI-driven technologies that cater to diverse applications such as manufacturing, logistics, healthcare, agriculture, and more. </p>
  <div class="location-content">
        <div class="location-img">
	   <a href="https://www.h-bots.com/" target="_blank">
            <img src="hbot.jpeg" alt="">
	   </a>
        </div>
        
    </div>
 </div>

 <div class="location-detail" id="Isro">
    <h1>ISRO</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
    </div>
    <p>The Indian Space Research Organisation (ISRO) is the space agency of the Government of India, responsible for the nation's space research and exploration endeavors. Established in 1969, ISRO has become a prominent player in the global space community, achieving remarkable milestones and contributions in space technology and research.
ISRO's primary objectives include the development of space technology, satellite communication, remote sensing, navigation, and space science research.  It has successfully launched a series of satellites for communication, earth observation, navigation, and scientific research, bolstering India's technological capabilities and benefiting various sectors like agriculture, disaster management, and weather forecasting.</p>
    
   <div class="location-content">
        <div class="location-img">
	   <a href="https://www.isro.gov.in/" target="_blank">
            <img src="isro.jpeg" alt="">
	</a>
        </div>
       
    </div>
 </div>

 <div class="location-detail" id="bhel">
    <h1>BHEL</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
    </div>
    <p>Bharat Heavy Electricals Limited (BHEL) is one of India's largest engineering and manufacturing companies, specializing in the design, production, and distribution of heavy electrical equipment. Established in 1964, BHEL plays a crucial role in various sectors of the economy, particularly in the power and industrial sectors.
BHEL is known for its expertise in manufacturing power generation equipment, including thermal, hydro, and nuclear power plant equipment. It designs and manufactures a wide range of power equipment such as boilers, turbines, generators, and transformers. BHEL's contributions to the power sector have been instrumental in meeting India's growing energy demands and promoting self-sufficiency in power equipment production.</p>
    
<div class="location-content">
        <div class="location-img">
	    <a href="https://www.bhel.com/" target="_blank">
            <img src="bhel.jpeg" alt="">
	   </a>
        </div>
        </div>
	<p> Click the images to get more</p>
 </div>

 </section>

<!--review -->

<!-- ... Your existing HTML code ... -->

<section class="review-section">
    <div class="review-heading">
        <h2>Customer Reviews</h2>
    </div>
    <div class="customer-review">
        <div class="review">
	  <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
    </div>
            <p>"I had an amazing experience exploring these industrial marvels. The tours were informative and eye-opening. Highly recommended!"</p>
            <p class="reviewer-name">- Nandini</p>
        </div>
        <div class="review">
	<div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
    </div>
            <p>"IndusExplore organized an incredible trip for us. The insights we gained during these visits were truly valuable. Thank you!"</p>
            <p class="reviewer-name">- Kalyan baabuu</p>
        </div>
        <div class="review">
	<div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
       
    </div>
            <p>"The industrial tours provided by IndusExplore were outstanding. It's impressive how they offer such diverse and educational experiences."</p>
            <p class="reviewer-name">- Pk star</p>
        </div>
        <div class="review">
	<div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
    </div>
            <p>"I'm really glad I chose IndusExplore for these tours. The knowledge gained during these visits is something I'll carry with me throughout my career."</p>
            <p class="reviewer-name">- Buu darling</p>
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
