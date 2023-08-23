<?php 

require_once '../controller/PackInfo.php';
$pack = fetchPack($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
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
    
    <h2 class="text"> Welcome To Your Profile  </h2><br>

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
        <ul>
                <li><a href="../view/advisor/advisordashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="../view/advisor/advisorProfile.php" class="cta-button">Profile </a></li><br>
                <li><a href="../view/advisor/advisorEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="../view/advisor/packagelist.php" class="cta-button"> Package List</a></li><br>
                <li><a href="../../controller/addPack.php" class="cta-button"> Add Page </a></li><br>
                <li><a href="../controller/deletePack.php" class="cta-button"> Add/Delete Package </a></li><br>
                <li><a href="../view/advisor/advisorPendingPak.php" class="cta-button"> Pending Package List </a></li><br>

                <li><a href="../view/advisor/advisorComPak.php" class="cta-button"> Compleate Package List</a></li><br>

                <li><a href="/view/logout.php" class="cta-button">Logout</a></li><br>
            </ul>
            </div>

            <div class="form_content">

 





 <form action="../controller/updatePack.php" method="POST" enctype="multipart/form-data">
 <div class="form-group">
  <label for="name">Name:</label><br>
  <input value="<?php echo $pack['name'] ?>" type="text" id="name" name="name"><br>
</div>
  <div class="form-group">
  <label for="day">Day:</label><br>
  <input value="<?php echo $pack['day'] ?>" type="text" id="day" name="day"><br>
  </div>
  <div class="form-group">
  <label for="price">Price:</label><br>
  <input value="<?php echo $pack['price'] ?>" type="text" id="price" name="price"><br>
  </div>
  <div class="form-group">
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  </div>
  <div class="form-group">
  <input type="submit" class="cta-button" name = "updatePack" value="Update">
  <input type="reset" class="cta-button"> 
  </div>
</form> 
</div>
</div>
</div>
<br><br><br>  
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
