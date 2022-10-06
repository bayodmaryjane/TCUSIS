<?php
    
    //session_start();

    //connect to database
    $db = mysqli_connect("localhost", "root", "", "tcusis");

    if (isset($_POST['save'])) {
        session_start();
        $id = $_POST['id'];
        $year = $_POST['year'];
        $academic_year = $_POST['academic_year'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $midname = $_POST['midname'];
        $address = $_POST['address'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $mobilenum = $_POST['mobilenum'];
        $gender = $_POST['gender'];
        $nationality = $_POST['nationality'];
        $course = $_POST['course'];
        $status = $_POST['status'];
        $password = $_POST['password'];
        
        
            
        $sql = "INSERT INTO cbm_students(id,year,academic_year,lastname,firstname,midname,address,birthdate,email,mobilenum,gender,nationality,course,status,password)
        VALUES('$id','$year','$academic_year','$lastname','$firstname','$midname','$address','$birthdate','$email','$mobilenum','$gender','$nationality','$course','$status','$password')";
            
        mysqli_query($db, $sql);
        
    }
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
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
          <li><a class="link_name" href="#">New Student</a></li>
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
        <a href="#">
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
          <span class="link_name">Add User</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Add User</a></li>
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
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Welcome to College of Bussiness Management SIS - Admin Panel</span>
    </div>
	 <div class="container">
        <header>Add New Student</header>

        <form method="post" action="NewStu_CBM.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
					 <div class="input-field">
                            <label>Student ID </label>
                            <input type="text" name="id" placeholder="Enter your Student ID" required>
                        </div>
					
					  <div class="input-field">
                            <label>Semester</label>
                            <select name="year" required>
                                <option value="" disabled selected>Select semester</option>
                                <option value="1st">1st Semester</option>
                                <option value="2nd">2nd Semester</option>
                                <option value="summer">Summer</option>
                            </select>
                        </div>
						
						<div class="input-field">
                            <label>Academic Year</label>
                            <select name="academic_year" required>
                                <option  disabled selected>Select academic year</option>
                                <option value="20-21">2020-2021</option>
                                <option value="21-22">2021-2022</option>
                                <option value="22-23">2022-2023</option>
                            </select>
                        </div>
						

					
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lastname" placeholder="Enter last name" required>
                        </div>
						
						 <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="firstname" placeholder="Enter first name" required>
                        </div>
						
						 <div class="input-field">
                            <label>Middle Name</label>
                            <input type="text" name="midname" placeholder="Enter middle name" required>
                        </div>
						
						 <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter address" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="birthdate" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text" name="mobilenum" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
								<option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
						
						  <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" placeholder="Enter nationality" >
                        </div>
						
						
						  <div class="input-field">
                            <label>Course</label>
                            <select name="course" required>
                                <option value="" disabled selected>Select course</option>
                                 <option value="BSBA-HRDM">BS in Business Administration - Human Resource Development Management</option>
                                <option value="BSBA-MM">BS in Business Administration - Marketing Management</option>
                                <option value="BSEM">BS in Entrepreneurial Management</option>
								<option value="BSOA">BS in Office Administration</option>
							<option value="BSC">BS in Criminology</option>
								<option value="BSCS">BS in Computer Science</option>
								<option value="BSIS">BS in Information System</option>
								<option value="BACT">Bachelor of Associate in Computer Technology</option>
								<option value="BSE-E">Bachelor of Secondary Education - English</option>
								<option value="BSE-M">Bachelor of Secondary Education - Mathematics</option>
								<option value="BSE-S">Bachelor of Secondary Education - Science</option>
								<option value="BED">Bachelor in Elementary Education</option>
								<option value="BSIE">BS in Industrial Engineering</option>
								<option value="BSIT-Electrical">BS in Industrial Technology - Electrical</option>
								<option value="BSIT-Electronic">BS in Industrial Technology - Electronics</option>
								<option value="BSTM">BS in Tourism Management</option>
								<option value="BSHM">BS in Hospitality Management</option>
								<option value="BSP">BS in Psychology</option>
								<option value="BSSW">BS in Social Work</option>
								<option value="BSPA">BS in Public Administration</option>
								<option>Others</option> 
                            </select> 
                        </div> 
						
						
                        <div class="input-field">
                            <label>Civil Status</label>
                            <input type="text" name="status" placeholder="Enter civil status">
                        </div>
						
						  <div class="input-field">
                            <label>Password</label>
                            <input type="text" name="password" placeholder="Create password for student" >
                        </div>
					
                    </div>
                </div>
						<button type="sumbit" name="save">
                            <span name="save" class="btnText">SAVE</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                </div> 
            </form>
        </div>


        
    

  </section>

  <script src="NewSty.js"></script>

</body>
</html>
