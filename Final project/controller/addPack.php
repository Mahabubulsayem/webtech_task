<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script>
function validateForm() {
  let x = document.forms["myForm"]["name"]["day"] ["price"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
    
</head>
<body>
    <div class="header">
        <h1 class="website-title">ProCare Solutions</h1>
        <nav>
            <ul>
                <li><a href="../index.php" class="button">Home</a></li>

            </ul>
        </nav>
    </div><br> 
    
    <h2 class="text"> Welcome! Advisor </h2><br>

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
            <ul>
                <li><a href="../view/advisor/advisordashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="../view/advisor/advisorProfile.php" class="cta-button">Profile </a></li><br>
                <li><a href="../view/advisor/advisorEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="../view/advisor/packagelist.php" class="cta-button"> Package List</a></li><br>
                <li><a href="addPack.php" class="cta-button"> Add Package </a></li><br>
                <li><a href="deletePack.php" class="cta-button"> Add/Delete Package </a></li><br>
                <li><a href="../view/advisor/advisorPendingPak.php" class="cta-button"> Pending Package List </a></li><br>

                <li><a href="../view/advisor/advisorComPak.php" class="cta-button"> Compleate Package List</a></li><br>

                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>

            </div>

            
    
<p class=" p ">
    <div class="form_content">

  

 <form action="createPack.php"onsubmit="return validateForm()" method="POST" name = myForm enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="day">Day:</label><br>
  <input type="text" id="day" name="day"><br>

  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price"><br>

  <input type="submit" name = "createPack" value="Create">

  <input type="reset"> 

  
</form> 

</div>

</p>


</div>

        
    <br><br><br>
       
    
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>