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
    
    <h2 class="text"> Users List </h2><br>
    
    
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
@include '../../model/db_connect.php';
$conn= db_conn();
$query = "SELECT * FROM user WHERE role = 'user'";
$stmt = $conn->prepare($query);

// Execute the query
$stmt->execute();

// Fetch all rows from the result set
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <table>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Date of Birth</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['dob']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>

      </div>
        </div>
    <br><br><br>
       
    </div>
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
