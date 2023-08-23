<!DOCTYPE html>
<html lang="en">
<style>
    table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<body>
    <div class="header">
        <h1 class="website-title">Your Advisor</h1>
        <nav>
            <ul>
                <li><a href="../../index.php" class="button">Home</a></li>

            </ul>
        </nav>
    </div><br> 


    <h2 class="text"> User purchased this package</h2><br>
    

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
            <ul>
                <li><a href="adminDashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="adminsprofile.php" class="cta-button">Profile </a></li><br>
                <li><a href="adminEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="adsUsershowProfile.php" class="cta-button">Show User </a></li><br>
                <li><a href="adsShowadvisor.php" class="cta-button">Show Advisor</a></li><br>
                <li><a href="pacageForUser.php" class="cta-button"> Pacage for user </a></li><br>
                <!-- <li><a href="adminEditadvisor.php" class="cta-button">Edit Advisor</a></li><br> -->
                <li><a href="../../controller/addAdvisor.php" class="cta-button">Add Advisor</a></li><br>
                <li><a href="../../controller/deleteAdvisor.php" class="cta-button">Delete Advisor</a></li><br>
                <li><a href="adsEdituser.php" class="cta-button">Edit user </a></li><br>
                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>


            <div class="body, h1, h2, p, ul, li text ">
<div class="div">
    <button type="button" onclick="loadXMLDoc()">Get my Services</button>
<br><br>
<table id="demo"></table>

<script>
function loadXMLDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    const xmlDoc = xhttp.responseXML;
    const cd = xmlDoc.getElementsByTagName("CD");
    myFunction(cd)
  }
  xhttp.open("GET", "cd_packages.xml");
  xhttp.send();
}

function myFunction(cd) {
  let table="<tr><th>Service</th><th>Price</th></tr>";
  for (let i = 0; i < cd.length; i++) { 
    table += "<tr><td>" +
    cd[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
    cd[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
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
