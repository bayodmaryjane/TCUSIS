<?php

$db = mysqli_connect("localhost", "root", "", "tcusis");

if(isset($_POST['login'])){
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM admin_faculty WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);
    
    if (mysqli_num_rows($result) == 1){
        $_SESSION['message'] = "You are now logged in";
        header("location: faculty_dashboard.html");
    }else{
        $_SESSION['message'] = "Incorrect id/password";
    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="loginprof_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login Faculty Panel</title>
</head>
<body>
    <section class="side">
        <img class="tcu" src="Images\tcu.png" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">TCUSIS Faculty Login Portal</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to proceed and have access to all our services.</p>

            <form class="login-form" method="post" action="login_prof.php">
                <div class="form-control">
                    <input type="text" placeholder="username" name="username"> 
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" name="password"  placeholder="Password">
                    <i class="fas fa-lock"></i>
                </div>

                <button class="submit" name="login">  Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>