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
        
        
            
        $sql = "INSERT INTO admin_faculty(name,email,department,username,password)
        VALUES('$name','$email','$department','$username','$password')";
            
        mysqli_query($db, $sql);
        
    }
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> TCU Admin Dashboard </title>
    <link rel="stylesheet" href="NewStu_style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- add icon link -->
        <link rel="icon" href="Images/tculogo.jpg" type="image/x-icon">
    <style>
        .popup{
            width: 700px;
            background: #fff;
            border-radius: 6px;
            position: absolute
            top: 0%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            visibility: hidden;        
        }
        .open-popup{
            visibility: visible;
            top: 50%;
            transform: translate(-50%,-50%) scale(1);
        }
      
    </style>   

   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='logo'><a href="#"><img src="Images/logo.png"></a></i>
      <span class="logo_name">TCUSIS</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
	  <li>
        <a href="#">
          <i class='bx bx-plus' ></i>
          <span class="link_name">New Student</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="NewStu_CBM.php">New Student</a></li>
        </ul>
      </li>
	   <li>
        <a href="#">
          <i class='bx bx-user' ></i>
          <span class="link_name">Student List</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Student List</a></li>
        </ul>
      </li>
	  <li>
        <a href="admin_postAnnounce.php">
          <i class='bx bxs-microphone' ></i>
          <span class="link_name">Announcement</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Announcement</a></li>
        </ul>
      </li>
	  <li>
        <a href="#">
          <i class='bx bx-user-plus' ></i>
          <span class="link_name">Faculty</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="admin_faculty.php">Faculty</a></li>
        </ul>
      </li>
        
        <li>
        <a href="#">
          <i class='bx bx-user-plus' ></i>
          <span class="link_name">Users</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="admin_users.php">Users</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Maintenance</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
          <li><a href="#">#</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
	  <li>
        <a href="admin_course.html">
          <i class='bx bx-log-out' ></i>
          <span class="link_name">Logout</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Logout</a></li>
        </ul>
      </li>
      <li>
  
  </li>
</ul>
  </div>
<script src="NewSty.js"></script>    
<div>
    <header><h1>List of Faculty</h1></header>
    <br>
    
    <table class="table">
        <thead>
			<tr>
				<th>Faculty ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Department</th>
				<th>Username</th>
                <th>Password</th>
				<th>Action</th>
			</tr>
            
		</thead>
        
        
        <button class="addfaculty" name="addfaculty" onclick="openPopup()"> Add Faculty Account </button>
        
        
        
        
        
        
        
        
        <div class="popup" id="popup">
        
            <form method="post" action="admin_faculty.php">
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
                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter Password" required>
                        </div>
                    </div>
                
                <button type="sumbit" name="save">
                            <span name="save" class="btnText">SAVE</span>
                            <i class="uil uil-navigator"></i>
                    </button>
                
                <button type="button" onclick="closePopup()"> Close </button>
            </div>
        </form>
            
            
        </div>
        

            
        
        
        
        
        
        
            
        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "tcusis";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM admin_faculty";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["faculty_id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["department"] . "</td>
                    <td>" . $row["username"] . "</td>
                    <td>" . $row["password"] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                    </td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
    </div>
    
    <script>
        let popup = document.getElementById("popup");
        
        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    
    
    </script>
    
    
    
</body>
</html>
