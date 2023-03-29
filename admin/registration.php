<?php
include_once 'include/class.user.php'; 
$user=new User(); 
if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $register=$user->reg_user($fullname, $uname, $upass, $uemail); 
    if($register) 
    { 
        echo "
<script type='text/javascript'>
    alert('Your Manager has been Added Successfully');
</script>"; 
        echo "
<script type='text/javascript'>
    window.location.href = '../admin.php';
</script>"; 
    } 
    else 
    {
        echo "
<script type='text/javascript'>
    alert('Registration failed! username or email already exists');
</script>";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;500;600&family=Righteous&display=swap" rel="stylesheet">
    <style>
        .h-font{
    font-family: 'Righteous', cursive;
    color: #000000;
    }
    </style>
    <script language="javascript" type="text/javascript">
        function submitreg() {
            var form = document.reg;
            if (form.name.value == "") {
                alert("Enter Name.");
                return false;
            } else if (form.uname.value == "") {
                alert("Enter username.");
                return false;
            } else if (form.upass.value == "") {
                alert("Enter Password.");
                return false;
            } else if (form.uemail.value == "") {
                alert("Enter email.");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <div class="well h-font">
            <h2 class="h-font">Add Your Manager</h2>
            <hr>
            <form action="" method="post" name="reg">
                <div class="form-group">
                    <label for="fullname" class="h-font">Full Name:</label>
                    <input type="text" class="form-control" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="uname" class="h-font">User Name:</label>
                    <input type="text" class="form-control" name="uname" required>
                </div>
                <div class="form-group">
                    <label for="uemail" class="h-font">Email:</label>
                    <input type="email" class="form-control" name="uemail" required>
                </div>
                <div class="form-group">
                    <label for="upass" class="h-font">Password</label>
                    <input type="text" class="form-control" name="upass"  required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Manager" onclick="return(submitreg());">Submit</button>

                <br>
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>