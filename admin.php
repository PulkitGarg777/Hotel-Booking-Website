<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
    header("location:index.php"); 
} 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;500;600&family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style>
        .h-font{
    font-family: 'Righteous', cursive;
    }
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffffff;
            font-family: 'Righteous', cursive;
        }
        
        ul {
            color: white;
            font-size: 13px;
        }
    </style>


</head>

<body>
    <div class="container h-font">


        
        <nav class="navbar navbar-inverse">
        <a class="navbar-brand me-5 fw-bold fs-3" style="font-size:2vw" href="index.php">PmB Hotel</a>
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li class="active"><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 well">
            <h4 class="h-font">Room Category</h4>
            <hr>
            <ul>
                <li><a href="admin/addroom.php">Add Room Category</a></li>
                <li><a href="show_room_cat.php">Show All Room Category</a></li>
                <li><a href="show_room_cat.php">Edit Room Category</a></li>
            </ul>
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 well">
            <h4 class="h-font">Bookings</h4>
            <hr>
            <ul>
                <li><a href="room.php">Book Now</a></li>
                <li><a href="show_all_room.php">Show All Booked Rooms</a></li>
                <li><a href="show_all_room.php">Edit Booked Room</a></li>
            </ul>
        </div>
        <div class="col-md-3"></div>
    </div>
    
    
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 well">
            <h4>Add Manager</h4>
            <hr>
            <ul>
                <li><a href="admin/registration.php">Add Manager</a></li>

            </ul>
        </div>
        <div class="col-md-3"></div>
    </div>









</div>










<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>