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
    <h2 class="text"> Welcome To Profile Admin!!</h2><br>

    

    
    
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
<?php
session_start();
@include('../../model/db_connect.php');
$conn= db_conn();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];

// Retrieve additional user information
$query = "SELECT name, username, dob, email, phone FROM user WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $user['id']);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

    <!-- <h2>Welcome, <?php echo $user['username']; ?>!</h2> -->
    <p>Name: <?php echo $user['name']; ?></p>
    <p>Username: <?php echo $user['username']; ?></p>
    <p>Date of Birth: <?php echo $user['dob']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
    <p>Phone: <?php echo $user['phone']; ?></p>
    <a href="logout.php">Logout</a>


 </div>   </div>
 </div>
</div>
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>



