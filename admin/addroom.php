<?php
include_once 'include/class.user.php'; 
$user=new User(); 


if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->add_room($roomname, $room_qnty, $no_bed, $bedtype,$facility,$price);
    if($result)
    {
    echo "<script type='text/javascript'>
            alert('Room Added Succesfully');
        </script>";
}
else
{
        echo $result;
}

} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;500;600&family=Righteous&display=swap" rel="stylesheet">
    <style>
        .h-font{
            color: #000000;
    font-family: 'Righteous', cursive;
    }
    </style>
</head>

<body>
    <div class="container h-font">
        <div class="well">
            <h2 class="h-font">Add Room Category</h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group h-font">
                    <label for="roomname" class="h-font">Room Type Name:</label>
                    <input type="text" class="form-control" name="roomname" placeholder="Room Name" required>
                </div>
                <div class="form-group h-font">
                <label for="qty" class="h-font">No of Rooms:</label>&nbsp;
                <select name="room_qnty">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="form-group h-font">
                <label for="bed" class="h-font">No of Bed:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="no_bed">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>
            <div class="form-group h-font">
                <label for="bedtype" class="h-font">Bed Type:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="bedtype">
                    <option value="single">single</option>
                    <option value="double">double</option>
                </select>
            </div>
            <div class="form-group h-font">
                <label for="Facility" class="h-font">Facility</label>
                <textarea class="form-control" rows="5" name="facility"></textarea>
            </div>
            <div class="form-group h-font">
                <label for="price" class="h-font">Price Per Night:</label>
                <input type="text" class="form-control" name="price" required>
            </div>
            <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Room">Add</button>

            <br>
            <div id="click_here">
                <a href="../admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>