<?php
    
    //session_start();

    //connect to database
    $db = mysqli_connect("localhost", "root", "", "tcusis");

    if (isset($_POST['postAnnouncement'])) {
        session_start();
        
        $title = $_POST['title'];
        $body = $_POST['body'];

        
            
        $sql = "INSERT INTO cbm_announcement(title,body)
        
        VALUES('$title', '$body)";
            
        mysqli_query($db, $sql);
        
    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Add New Announcement </title>
    <link rel="stylesheet" href="Announce_style.css">
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
        <a href="NewStu_CBM.php">
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
        <header>Post New Announcement</header>
		
		
		
		

        <form method="post" action="admin_postAnnounce.php">
            <div class="form first">
                <div class="details personal">

                    <div class="fields">
					 <div class="input-field">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="Title" required>
                        </div>
						  
						
					
                        <div class="input-field1">
                            <label>Body</label>
                            <input type="text" name="body" placeholder="Body" required>
                        </div>
					</div>
				
                    
                </div>

						<button type="sumbit" name="postAnnouncement">
                            <span name="postAnnouncement" class="btnText">POST</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                </div> 
            


        </form>
    </div>

  </section>

  <script src="NewSty.js"></script>

</body>
</html>
