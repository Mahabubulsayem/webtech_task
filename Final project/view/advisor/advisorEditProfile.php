
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
    <div class="header">
        <h1 class="website-title">ProCare Solutions</h1>
        <nav>
            <ul>
                <li><a href="../../index.php" class="button">Home</a></li>

            </ul>
        </nav>
    </div><br> 
    
    <h2 class="text"> Edit Your Profile Advisor !! </h2><br>

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
        <ul>
                <li><a href="advisordashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="advisorProfile.php" class="cta-button">Profile </a></li><br>
                <li><a href="advisorEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="packagelist.php" class="cta-button"> Package List</a></li><br>
                <li><a href="../../controller/addPack.php" class="cta-button"> Add Package </a></li><br>
                <li><a href="../../controller/deletePack.php" class="cta-button"> Add/Delete Package </a></li><br>
                <li><a href="advisorPendingPak.php" class="cta-button"> Pending Package List </a></li><br>

                <li><a href="advisorComPak.php" class="cta-button"> Compleate Package List</a></li><br>

                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>
            </div>

            <div class="from_profile">
                
   <form action="../../controller/advisorupdateprofile.php" 
   class="form_content" method="post">    
      
      
      <?php

      session_start();

   

if (isset($_SESSION['user']))
{
    if ($_SESSION['user']['role']!== 'advisor'){
        header("location: ../login.php");
    }

    }
    else{
        header("location: ../login.php");
    }


      @include('../../model/db_connect.php');
      $conn= db_conn();
      

      $user = $_SESSION['user'];

      // Retrieve additional user information
      $query = "SELECT name, username, dob, email, phone FROM user WHERE id = :id";
      $stmt = $conn->prepare($query);
      $stmt->bindParam(':id', $user['id']);
      $stmt->execute();



      $user = $stmt->fetch(PDO::FETCH_ASSOC);
           



      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
       <div class="form-group">
      <label for="name">NAME:</label>
      <input value="<?php echo $user['name']; ?>" name="name"   required placeholder="enter your name"><br>
      </div>

      <div class="form-group">
      <label for="Username">USENAME:</label>
      <input value="<?php echo $user['username']; ?>" <?php echo $user['username']; ?> name="username" required placeholder="enter your username"><br>
      </div>

      <div class="form-group">
      <label for="email">EMAIL:</label>
      <input value="<?php echo $user['email']; ?>" <?php echo $user['email']; ?> name="email" required placeholder="enter your email"><br>
      </div>

      <div class="form-group">
      <label for="DOB">DATE OF BIRTH:</label>
      <input value="<?php echo $user['dob']; ?>" <?php echo $user['dob']; ?> name="dob"><br>
      </div>

      <div class="form-group">
      <label for="phone">PHONE NUMBER:</label>
      <input value="<?php echo $user['phone']; ?>"  name="phone" required ><br>
      </div>

<div class="text">
   <h2>
      <input type="submit" class="cta-button" name="submit" value="EDIT" class="form-btn">
      
      <br>
      <br></h2>
</div>      
   </form><br>

</div>

        </div>

       
    <br><br><br>
       
    
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
