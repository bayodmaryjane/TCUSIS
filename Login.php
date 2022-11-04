<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="loginprof_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title> Taguig City University </title>
</head>
<body>
    <section class="side">
        <img class="tcu" src="Images\tcu.png" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <br>
            <br>
            <br><br>
            <p class="title">Hi, TCUnicians!</p>
            <div class="separator"></div>
            <p class="welcome-message">Please click or tap your destination.</p>

            <form class="login-form" method="post" action="login.php">
                <a href="student_login.php">
                <button class="submit" name="login">  STUDENT </button>
                </a>
                
                <a href="login_prof.php">
                <button class="submit" name="login">  FACULTY</button>
                </a>
            </form>
        </div>
    </section>
    
</body>
</html>