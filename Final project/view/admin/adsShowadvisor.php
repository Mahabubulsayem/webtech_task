<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    

    <h2 class="text"> Advisors List </h2><br>

    
    <div class="side-content">
        
        <div class="side-content" >
            
            <ul>
                <li><a href="adminDashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="adminsprofile.php" class="cta-button">Profile </a></li><br>
                <li><a href="adminEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="adsUsershowProfile.php" class="cta-button">Show User </a></li><br>
                <li><a href="adsShowadvisor.php" class="cta-button">Show Advisor</a></li><br>
                <li><a href="pacageForUser.php" class="cta-button"> Pacage for user </a></li><br>
                <li><a href="../../controller/addAdvisor.php" class="cta-button">Add Advisor</a></li><br>
                <li><a href="../../controller/deleteAdvisor.php" class="cta-button">Delete Advisor</a></li><br>
                <!-- <li><a href="adminEditadvisor.php" class="cta-button">Edit Advisor</a></li><br> -->
                <li><a href="adsEdituser.php" class="cta-button">Edit user </a></li><br>
                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>


            <div class="body, h1, h2, p, ul, li text ">
<div class="div">
    
<form action=""> 
  <select name="advisors" onchange="showAdvisor(this.value)">
    <option value="">Select an Advisor:</option>
    <option value="pritom">pritom</option>
    <option value="kabid ">kabid</option>
    <!-- <option value="WOLZA">Wolski Zajazd</option> -->
  </select>
</form>
<br>
<div id="txtHint">services info will be listed here...</div>

<script>
function showAdvisor(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getAdvisors.php?q="+str);
  xhttp.send();
}
</script>
</div>

</div>

        </div>
        </div>
    <br><br><br>
       
    
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
