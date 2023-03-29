<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PMB Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;500;600&family=Righteous&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    <style>
        .h-font{
    font-family: 'Righteous', cursive;
    }
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
		
    </style>
    
    
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-inverse navbar-expand-lg px-lg-3 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid h-font">
            <a class="navbar-brand me-5 fw-bold fs-3" style="font-size:2vw" href="index.php">PmB Hotel</a>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room & Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </div>
        </nav>
        

        <!-- carousel -->
        <div class="jumbotron">
            <div class="w3-content w3-section">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/1_new.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/2_new.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/3_new.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/4_new.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/5_new.jpg" style="width:100%; height:450px;">
                <img class="mySlides w3-animate-fading" src="images/home_gallary/6_new.jpg" style="width:100%; height:450px;">
            </div>    
        </div>

        <hr>

        <div class="row" style="color: #ffffff">
            <div class="col-md-12 well" >
                <h2 class ="h-font">The Essence of PmB</h2><br>
                <p class ="h-font">The essence of PmB is reflected in every aspect of who we are and what we do. We provide unparalleled service, comfort, and style while creating meaningful and memorable experiences. 
                <br><br> By paying close attention to the small details that make a big difference, we inspire unforgettable experiences with every stay.
                    <br><br> Your PmB experience should be all about personalization, every step of the way. By paying close attention to the small details that make a big difference, we inspire unforgettable experiences with every stay.<br><br> Step into stylish spaces designed for business and leisure in some of the worlds favorite destinations. Our culinary experts strive to deliver cutting edge, stylish, sophisticated gastronomy to every PmB dining experience.</p>
            </div>  
        </div>

        <div class="row h-font" style="color: #ffffff">
            <div class="col-md-4 well">
                <h4 class ="h-font">Contact Us</h4><hr>
                Address : Agra, Uttar Pradesh<br>
                Mail : pmboffcial@gmail.com <br>
                <i class="bi bi-telephone-fill"></i>  +91 9263754012 <br>
                <i class="bi bi-telephone-fill"></i>  +91 9817512754 <br>
            </div>

            <div class="col-md-4"></div>

            <div class="col-md-4 well">
                <h4>Developed By</h4><hr>
                <p>Pulkit Garg<br>Bhavya Vats<br>Maanya Lalchandani</p>
            </div>

        </div>
        
        <div class="row" style="color: #ffffff">
            <div class="col-md-12 well" >
                <h2 class ="h-font">Reach Us</h2><br>
                <iframe  width="1130" height="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113579.7697542569!2d77.98001294999999!3d27.1761745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39740d857c2f41d9%3A0x784aef38a9523b42!2sAgra%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1669918026627!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>  
        </div>


    </div>


<script src="my_js/slide.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>

</html>