<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil maps</title>
    <link rel="icon" href="./files/logo.png">
    <link rel="stylesheet" type="text/css" href="ex1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

 <style>
       .location-body{
     background-image: url(civil.jpg);
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
    background-image: url(civil1.jpg);
   background-size: cover;
}
nav{
    width: 100%;
    position: fixed;
    background-image: url(civil2.jpg);
   background-size: cover;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 15%);
    display: flex;
    align-items: center;
    justify-content: space-between;
}


.review-section {
	 background-image: url(civil3.jpg);
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
        <img src="civillogo.jpeg" class="logo" alt="Logo" title="Travels">

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
    <h1>Hindustan Construction Company</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
    </div>
    <p > Hindustan Construction Company (HCC) is a prominent Indian infrastructure construction company that operates in various sectors of the construction industry. Here's a brief overview of HCC:
Company: Hindustan Construction Company Limited (HCC)
Founded: 1926
Headquarters: Mumbai, Maharashtra, India
HCC is known for its expertise in executing complex and challenging infrastructure projects across various sectors, including transportation, energy, water, and urban development.
Infrastructure Projects: The company has been involved in the construction of a wide range of infrastructure projects, including roads, highways, bridges, tunnels, airports, metro systems, hydroelectric power plants, and more.</p>
  <div class="location-content">
        <div class="location-img">
	   <a href="https://www.h-bots.com/" target="_blank">
            <img src="hcc.jpeg" alt="">
	   </a>
        </div>
        
    </div>
 </div>

 <div class="location-detail" id="Isro">
    <h1>Anna Flyover</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
    </div>
    <p>Anna Flyover is a prominent elevated bridge located in Chennai, Tamil Nadu, India. Here's an overview of the Anna Flyover:
Location: Chennai, Tamil Nadu, India
Name: Anna Flyover
Inaugurated: 1973
Elevated Structure: Anna Flyover is an elevated bridge that spans a busy intersection in Chennai, providing a crucial link between various parts of the city.

Traffic Congestion Relief: The flyover was constructed to alleviate traffic congestion at the Anna Salai-Mount Road intersection, which is one of the busiest and most congested areas in Chennai.</p>
    
   <div class="location-content">
        <div class="location-img">
	   <a href="https://www.isro.gov.in/" target="_blank">
            <img src="anna.jpeg" alt="">
	</a>
        </div>
       
    </div>
 </div>

<div class="location-detail" id="Isro">
    <h1>Sardar sarovar</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
    </div>
    <p>The Sardar Sarovar Dam is one of the largest and most significant multipurpose river valley projects in India. It is located on the Narmada River in the western Indian state of Gujarat. Here are some key points about the Sardar Sarovar Dam:
Purpose and Benefits: The primary purpose of the Sardar Sarovar Dam is to provide water for irrigation, drinking water supply, and hydropower generation. It aims to benefit the drought-prone regions of Gujarat and neighboring states.
Hydropower Generation: The dam has an associated hydropower plant that generates electricity. The power generated from this plant contributes to the energy needs of the region.</p>
    
   <div class="location-content">
        <div class="location-img">
	   <a href="https://www.isro.gov.in/" target="_blank">
            <img src="ss.jpeg" alt="">
	</a>
        </div>
       
    </div>
 </div>

<div class="location-detail" id="Isro">
    <h1>Nagarjuna Sagar Dam</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
    </div>
    <p>The Nagarjuna Sagar Dam is a major masonry dam built on the Krishna River in Nagarjuna Sagar, Nalgonda District, Telangana, India. Here is a summary of Nagarjuna Sagar Dam:

Location: Nagarjuna Sagar, Nalgonda District, Telangana, India
Purpose: Irrigation, Hydroelectric Power Generation, and Water Supply
Construction Period: 1955 - 1972
Height: 124 meters (407 feet)
Length: 1,550 meters (5,085 feet)
Reservoir Capacity: 11.472 billion cubic meters
Type: Masonry Dam
River: Krishna River</p>
    
   <div class="location-content">
        <div class="location-img">
	   <a href="https://www.isro.gov.in/" target="_blank">
            <img src="ns.jpeg" alt="">
	</a>
        </div>
       
    </div>
 </div>

<div class="location-detail" id="Isro">
    <h1>Bangalore-chennai expressway</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
    </div>
    <p>The Bangalore-Chennai Expressway is a proposed high-speed expressway that aims to connect the cities of Bangalore (Bengaluru) in Karnataka and Chennai in Tamil Nadu, two major metropolitan areas in South India. This ambitious infrastructure project is designed to enhance connectivity, reduce travel time, and promote economic development in the region. Here's an overview of the project:

Key Details of the Bangalore-Chennai Expressway:

Route: The expressway is planned to run between Bangalore, Karnataka, and Chennai, Tamil Nadu. The exact route is designed to optimize connectivity and accessibility to various towns, cities, and industrial areas along the way.</p>
    
   <div class="location-content">
        <div class="location-img">
	   <a href="https://www.isro.gov.in/" target="_blank">
            <img src="bc.jpeg" alt="">
	</a>
        </div>
       
    </div>
 </div>


 <div class="location-detail" id="bhel">
    <h1>Prakasham Barrage</h1>
    <div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
    </div>
    <p>I apologize for any confusion, but there seems to be an inconsistency in the name you've provided. The Prakasam Barrage is actually located in Vijayawada, Andhra Pradesh, not Visakhapatnam. It is a significant structure built across the Krishna River.
Prakasam Barrage, Vijayawada:
Location: Vijayawada, Andhra Pradesh, India
Purpose: Diversion of Krishna River water for irrigation and drinking water supply
Construction Period: 1954 - 1957
Length: Approximately 1,223.5 meters
Type: Earth-cum-Masonry Barrage</p>
    
<div class="location-content">
        <div class="location-img">
	    <a href="https://www.bhel.com/" target="_blank">
            <img src="pb1.jpeg" alt="">
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
            <p>Inspiring Career Insights:
"The industrial tour arranged by IndusExplore was a game-changer for me. It gave me a clearer picture of the career paths I could pursue after graduation. Seeing the latest technologies and innovations in action was truly inspiring. It helped me set my career goals with more confidence."</p>
            <p class="reviewer-name">- Vijay</p>
        </div>
        <div class="review">
	<div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
    </div>
            <p>"Insightful and Informative:
"IndusExplore provided us with an unforgettable industrial tour. The range of industries we visited was impressive, and the detailed explanations from company representatives helped me understand various processes and technologies. This tour broadened my horizons and enhanced my understanding of how things work in the real world."</p>
            <p class="reviewer-name">- -Karthik</p>
        </div>
        <div class="review">
	<div class="stars">
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star'></i></a>
        <a href="#"><i class='bx bxs-star-half'></i></a>
       
    </div>
            <p>"Well-Organized and Engaging:
"Kudos to IndusExplore for organizing a seamless industrial tour. From transportation to scheduling, everything was well-planned. The tour was not only educational but also engaging and interactive. I particularly enjoyed the hands-on activities and the chance to ask questions to industry professionals."</p>
            <p class="reviewer-name">-- vikram</p>
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
