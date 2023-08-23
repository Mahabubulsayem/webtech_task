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
?>

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
    
    <h2 class="text"> Pending Package List </h2><br>

    
    
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
            </ul>   </div>


            <div class="form_profile">



<div class="text"> 


<div class="form_content">
<button type="button" class="cta-button" onclick="loadDoc()">Get my CD collection</button>
<br><br>
<table border="1" id="demo">

</table>

<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    myFunction(this);
  }
  xhttp.open("GET", "cd_catalog.xml");
  xhttp.send();
}
function myFunction(xml) {
  const xmlDoc = xml.responseXML;
  const x = xmlDoc.getElementsByTagName("CD");
  let table="<tr><th>Artist</th><th>Title</th></tr>";
  for (let i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

</p></div>
</div>

</div>

    </div>
     
    <br><br><br>
      
    
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
