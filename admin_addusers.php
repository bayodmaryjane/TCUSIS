<?php
    
    //session_start();

    //connect to database
    $db = mysqli_connect("localhost", "root", "", "tcusis");

    if (isset($_POST['save'])) {
        session_start();
        $name = $_POST['name'];
        $email= $_POST['email'];
        $department = $_POST['department'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        
            
        $sql = "INSERT INTO admin_users(name,email,department,username,password)
        VALUES('$name','$email','$department','$username','$password')";
            
        mysqli_query($db, $sql);
        
    }
?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <title></title>
        
    <title> Admin - Add Faculty </title>

    </head>
    <body>

        <form method="post" action="admin_addusers.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Add User Account</span>


					
                        <div class="input-field">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Your Full Name" required>
                        </div>
						
						 <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter Email Address" required>
                        </div>
                    
                    <div class="input-field">
                            <label>Department</label>
                            <select name="department" required>
                        
                                <option value="" disabled selected>Select Department</option>
                                
                                <option value="cict">admin-cict</option>
                                
                                <option value="CBM">admin-cbm</option>
        
                            </select>
                        </div>
						
						 <div class="input-field">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Enter Username" required>
                        </div>
                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" name="password" placeholder="Enter Password" required>
                        </div>
                    </div>
                
                <button type="sumbit" name="save">
                            <span name="save" class="btnText">SAVE</span>
                            <i class="uil uil-navigator"></i>
                    </button>
            </div>
        </form>
                        
    </body>
</html>