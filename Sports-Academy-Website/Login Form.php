<?php
include_once("Conn.php");
?>

<html>
    <head>
        <title>Login Form</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style1.css" type="text/css">
    </head>
    <body>
        <div class="wrapper">
            <span class="icon-close">
            <i class='bx bx-x'></i>
            </span>
            <div class="form-box login">
            <form method="post">
                <h1>Admin Login</h1>
                <div class="input-box">
                    <input type="text" name="Name" placeholder="Username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="Password" placeholder="Password">
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" name="submit" Value="Login" class="btn">Login</button>
            </form>
            </div>
        </div>
    </body>
</html>

<?php 

if (isset($_POST['submit'])) 
{
    $user = $_POST['Name'];
    $pwd = $_POST['Password'];

    $query = "Select * From coach where Name = '$user' and Specialization = '$pwd' ";
    $run = mysqli_query($con,$query);
    $row=mysqli_num_rows($run);
    if ($row==1) 
    {
        $_SESSION['loginsuccesfull']=1;
        echo "<script>alert('Logged in Successfully'); window.location.href='./Admin/AdminIndex.php';</script>";
    }
    else{
                echo "<script>alert('Check your ID pass - They Not Mactched our Users'); </script>";
            }
    
}

 ?>