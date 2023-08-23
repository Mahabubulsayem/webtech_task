<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
    
    <h2 class="text"> Select Package </h2><br>

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
            <ul>
                <li><a href="clientDashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="clientProfile.php" class="cta-button">Profile </a></li><br>
                <li><a href="clientEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="clientSelectpac.php" class="cta-button"> Select Pacage </a></li><br>
                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>


            <div class="body, h1, h2, p, ul, li text ">
<div class="div">
    

<form action=""> 
  <select name="customers" onchange="showPackage(this.value)">
    <option value="">Select a customer:</option>
    <option value="VAT">VAT</option>
    <option value="TAX ">TAX</option>
    <!-- <option value="WOLZA">Wolski Zajazd</option> -->
  </select>
</form>
<br>
<div id="txtHint">services info will be listed here...</div>

<script>
function showPackage(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getPackeges.php?q="+str);
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
