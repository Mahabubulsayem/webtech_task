<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

</head>
<body>
<div class="header">
        <h1 class="website-title">ProCare Solutions</h1>

     
        <div class="header">
        <nav>
            <ul>
                <li><a href="../index.php" class="button">Home</a></li>
                <li><a href="login.php" class="button">Login</a></li>
                <li><a href="registration.php" class="button"> Registration</a></li>
            </ul>
        </nav>
        </div>
        
    </div><br>

    <div class="center-content">
      
        
        <form class="form_content" action="../controller/checklogin.php" method="post">
            
        <h2 class="text">Login</h2><br><br>

        <label for="username">USERNAME:</label>
        <input type="text" name="username" placeholder="Username" required>
            <br><br>
        <label for="password">PASSWORD:</label>
        <input type="password" 
            name="password" placeholder="Password" required>
            <div class="text">
   <h2><br><br>
      <input type="submit" class="cta-button" name="submit" value="LOGIN" class="form-btn"><br>
      <br></h2>

</div>    
           

            
        </form>
    </div> 
    </div>

<br><br><br>

    <div class="footer">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
    
</body>
</html>
