<?php 
session_start();
if (isset($_SESSION['user']))
{
    if ($_SESSION['user']['role']!== 'admin'){
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


    <h2 class="text"> Welcome To Your Dashboard Admin!</h2><br>
    

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
            <ul>
                <li><a href="adminDashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="adminsprofile.php" class="cta-button">Profile </a></li><br>
                <li><a href="adminEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="adsUsershowProfile.php" class="cta-button">Show User </a></li><br>
                <li><a href="adsShowadvisor.php" class="cta-button">Show Advisor</a></li><br>
                <li><a href="pacageForUser.php" class="cta-button"> Package for user </a></li><br>
                <li><a href="../../controller/addAdvisor.php" class="cta-button">Add Advisor</a></li><br>
                <li><a href="../../controller/deleteAdvisor.php" class="cta-button">Delete Advisor</a></li><br>
                <li><a href="adsEdituser.php" class="cta-button">Edit user </a></li><br>
                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>


            <div class="body, h1, h2, p, ul, li text ">
<div class="div">
    
<p class="content p ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut a tempora sunt iusto culpa quisquam possimus eligendi, fugit illo aspernaaaaa aaaaaaaa aaaaaa aaa aaaaa aaaaaaa aaa aaaa aaaaaa aaa    a  aatur.  Debitis vel noaeufiadf uhaiu auh auh puhap u piua u a pa puhapiu pa pah pu ap hpaoui hpoiash  h oihouihopui hoa ophopao oh af n nulla cumque molestias! Assumenda sed ducimus nostrum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ut commodi nostrum aspernatur qui a odit, provident optio aliquid dignissimos vitae. Deserunt, explicabo quaerat aut porro culpa ipsam ipsum commodi ut blanditiis totam dolores voluptatibus, suscipit libero aliquam cum ratione quisquam facilis fugit voluptatum nemo. Eligendi minus quia ducimus aperiam, earum, obcaecati sit hic nihil reiciendis tenetur natus fugiat provident nam ipsum ut maiores commodi porro corporis, voluptatum aliquid voluptate nobis! Optio voluptatum fuga iusto, vero porro ipsum dolorem ab maiores quo, maxime eligendi esse nemo officiis est obcaecati tenetur excepturi beatae accusantium ipsa totam itaque deserunt fugit. Tempora doloremque voluptates laudantium consequatur. Ea tempore maxime perspiciatis et laborum, aut nulla eum, incidunt nobis totam pariatur quae magni odit dolores quaerat ut! Ducimus, enim repellendus. Tempore eaque </p>
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
