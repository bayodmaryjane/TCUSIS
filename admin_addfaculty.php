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
        
        
            
        $sql = "INSERT INTO admin_faculty(name,email,department,username)
        VALUES('$name','$email','$department','$username')";
            
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

        <form method="post" action="admin_addfaculty.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Add Faculty Account</span>


					
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
                                
                                <option value="BSCS">College of Information and Communication Technology</option>
                                
                                <option value="CBM">College of Business and Management</option>
        
                            </select>
                        </div>
						
						 <div class="input-field">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Enter Username" required>
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