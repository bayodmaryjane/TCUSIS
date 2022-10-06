<?php

$db = mysqli_connect("localhost", "root", "", "tcusis");

if(isset($_POST['login'])){
    session_start();
    
    $id = $_POST['id'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM cbm_students WHERE id='$id' AND password='$password'";
    $result = mysqli_query($db, $sql);
    
    if (mysqli_num_rows($result) == 1){
        $_SESSION['message'] = "You are now logged in";
        header("location: student_dashboard.html");
    }else{
        $_SESSION['message'] = "Incorrect id/password";
    }
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TCUSIS Student Login</title>
        <link rel="stylesheet" a href="style.css"/>
        <!-- add icon link -->
        <link rel="icon" href="Images/tculogo.jpg" type="image/x-icon">
    </head>

    <body>
        <form method="post" action="student_login.php">
        <div class="row">
            <div class="col1">
            <img  class="tcu" src="Images\tcu.png"/>
            </div>

            
            <div class="col2">
                <h1>TCUSIS Student Login Portal</h1>
                   <!-- PHP button
			<form method="POST" action="#">
                <div class="form-input">
                    <input type="text" name="username" placeholder="Input your ID Number"/>
                    </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Input your Password"/>
                </div> -->
                <div class="col3"></div>
                <h2>Student Number</h2>
                <input type="text" name="id" placeholder="e.g 19-01234"/>
                <h2>Password</h2>
                <input type="password" name="password" placeholder="Must have atleast 6 characters"/>
                <br>
                
                <button type="sumbit" name="login">
                            <span name="login" class="btnText">Login</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                
                <!--<div class="button"></div>
                <a onclick="submit"  href="admin_dboard.html"><button class="login">Login</button></a>-->
                </div>

                
                <!-- PHP button
                
                <input type="submit" name="submit" value="LOGIN" class="btn-login"/> 

                -->
                
           
			</div>
			</form>

    </body>
	
	</html>
