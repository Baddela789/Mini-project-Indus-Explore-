 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" href="./files/logo.png">
 
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
 <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <title>Engineering Branch tours</title>

  <style>
 
    .aboutbody {
      background-image: url(folkbg.jpeg);
   background-size: cover;
     
    }
nav{
    width: 100%;
    position: fixed;
    background-color: #222831;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 15%);
    display: flex;
    align-items: center;
    justify-content: space-between;
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
.image{
    width: 100%;
    padding: 78px 0px;
}

    .image-container {
      display: flex;
      align-items: center;
     margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    }
  
    .image-container img {
      max-width: 500px;

      margin: 50px;
      cursor: pointer;
      border:1px solid #ccc;
    }
    .image-description {
      max-width: 500px;
      padding: 50px;
      background-color: #f1f1f1;
      border-radius: 5px;
    
    transition: all 0.2s ease 0s;
    cursor: pointer;
    }
    .image-description h3 {
      margin: 1rem;
      font-size: 1.2rem;
    }
    .image-description p {
      margin: 5px 0;
    }
  .image-description:hover{
    transform: translateX(3px);
    box-shadow: 6px 20px 50px rgba(78, 78, 78, 0.1);
    border: 1px solid transparent;
    border-radius: 0px;
}
.image-heading h1{
    margin-top: 20px;
    font-size: 35px;
    margin-bottom: 20px;
   color: white;
  text-transform: capitalize;
  text-shadow: 1px black;
  transition: ease 0.3s;
}

.image-heading h1 span{
    color: #fc0050;

}
 .image-heading h1:hover{
	-webkit-text-stroke: 1px white;	
}
.footer{
    margin-top: 80px;
    background-image: url(bg.jpeg);
   background-size: cover;
}

.foot{
    padding: 20px 0;
}

.footer-content{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    
}

.footlinks h4{
    margin-top: 30px;
    font-size: 20px;
    font-weight: 600;
    color: white;
    margin-bottom: 30px;
    position: relative;
}


.footlinks h4:before{
    content: "";
    position: absolute;
    height: 2px;
    width: 70px;
    left: 0;
    bottom: -7px;
    background: white;
}


.footlinks ul li a{
    font-size: 17px;
    color: #dddddd;
    display: block;
    transition: ease 0.30s;
}

.footlinks ul li a:hover{
    transform: translate(6px);
    color: white;
}

.social a{
    font-size: 25px;
    margin: 4px;
    height: 40px;
    width: 40px;
    color: rgb(21, 74, 74);
    background-color: white;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    transition: ease 0.30s;
}

.social a:hover{
    transform: scale(1.2);
}

.end{
    text-align: center;
    padding-top: 60px;
    padding-bottom: 12px;
}

.end p{
    font-size: 15px;
    color: white;
    letter-spacing: 1px;
    font-weight: 300;
}

  </style>
</head>
<body class ="aboutbody">

        <nav>
            <img src="ielogo.png" class="logo" alt="Logo" title="Travels">

            <ul class="navbar">
                <li>
                    <a href="trav.php">Home</a>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </nav>
<section class="image">
   <div class="image-heading">
        <h1>Here, we showcase various <span>Engineering Branches</span> and explore more about the <span>Industrial visit places</span> associated with each <span>branch.</span></h1>
    </div>
  <div class="image-container">
    <a href="https://www.example.com/link1" target="_blank">
      <img src="hd2.jpg" alt="Left Image">
     
    </a>
    <div class="image-description">
  

      <h3>Left Image Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    
  </div>
</div>


  <div class="image-container">
    <div class="image-description">
      <h3>Right Image Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <a href="https://www.example.com/link2" target="_blank">
      <img src="hd4.jpg" alt="Right Image">
    </a>
  </div>
   <div class="image-container">
    <a href="https://www.example.com/link1" target="_blank">
      <img src="hd2.jpg" alt="Left Image">
     
    </a>
    <div class="image-description">
  

      <h3>Left Image Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    
  </div>
</div>


  <div class="image-container">
    <div class="image-description">
      <h3>Right Image Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <a href="https://www.example.com/link2" target="_blank">
      <img src="hd4.jpg" alt="Right Image">
    </a>
  </div>
 <div class="image-container">
    <a href="https://www.example.com/link1" target="_blank">
      <img src="hd2.jpg" alt="Left Image">
     
    </a>
    <div class="image-description">
  

      <h3>Left Image Description</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    
  </div>
</div>
</section>
  

  <section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./register.html">Register</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
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

