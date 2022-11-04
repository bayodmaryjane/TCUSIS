<?php
                include "connection.php";
        
                  $faculty_id="";
                  $name="";
                  $email="";
                  $department="";
                  $username="";
                  $password="";
                

                  $error="";
                  $success="";

                  if($_SERVER["REQUEST_METHOD"]=='GET'){
                    if(!isset($_GET['faculty_id'])){
                    header("location: admin_faculty.php");
                      exit;
                    }
                    $faculty_id = $_GET['faculty_id'];
                    $sql = "select * from admin_faculty where faculty_id=$faculty_id";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    while(!$row){
                      header("location: admin_faculty.php");
                      exit;
                    }
                    $name=$row["name"];
                    $email=$row["email"];
                    $department=$row["department"];
                    $username=$row["username"];
                    $password=$row["password"];

                  }
                  else{
                    $faculty_id = $_POST["faculty_id"];
                    $name=$_POST["name"];
                    $email=$_POST["email"];
                    $department=$_POST["department"];
                    $username=$_POST["username"];
                    $password=$_POST["password"];

                    $sql = "update admin_faculty set name='$name', email='$email', department='$department', username='$username', password='$password' where faculty_id='$faculty_id'";
                    $result = $conn->query($sql);

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
    
    
        
                <form method="post" action="edit.php">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Edit Faculty Account</span>
                            
                            <input type="hidden" name="faculty_id" value="<?php echo $faculty_id; ?>" class="form-control">
                            <div class="input-field">
                                <label>Name</label>
                                <input type="text" name="name" value="<?php echo $name; ?>"  required>
                            </div>

                             <div class="input-field">
                                <label>Email</label>
                                <input type="text" name="email" value="<?php echo $email; ?>"  required>
                            </div>

                            <div class="input-field">
                                <label>Department</label>
                                <select name="department" value="<?php echo $department; ?>" required>

                                    <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                                    <option value="CICT">College of Information and Communication Technology</option>
                                    <option value="CBM">College of Business and Management</option>

                                </select>
                            </div>

                             <div class="input-field">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $username; ?>"  required>
                            </div>
                        
                            <div class="input-field">
                                <label>Password</label>
                                <input type="password" name="password" value="<?php echo $password; ?>"  required>
                            </div>
                        
                         <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
                        <button type="sumbit" name="save">
                        Save </button>

                        <button type="button"> Close </button>
                    </div>
                </div>
                </form>
    </body>
</html>

